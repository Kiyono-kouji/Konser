<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationEmail;
use App\Models\TicketRegistration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class TicketRegistrationController extends Controller
{
    private const TAX_RATE = 0.10;

    private const CONVENIENCE_FEE = 25000;

    private const TICKET_PRICES = [
        'vip' => 2850000,
        'ga' => 1650000,
        'cat1' => 1250000,
        'cat2' => 850000,
    ];

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'ticket_tier' => ['required', Rule::in(array_keys(self::TICKET_PRICES))],
            'ticket_quantity' => ['required', 'integer', 'between:1,5'],
            'payment_method' => ['required', Rule::in([
                'bca_va',
                'mandiri_va',
                'qris',
                'credit_card',
            ])],
            'buyer_name' => ['required', 'string', 'max:255'],
            'buyer_email' => ['required', 'email', 'max:255'],
            'buyer_phone' => ['required', 'string', 'max:30'],
            'identity_number' => ['required', 'string', 'max:50'],
            'buyer_city' => ['nullable', 'string', 'max:100'],
            'promo_code' => ['nullable', 'string', 'max:50'],
            'special_notes' => ['nullable', 'string', 'max:1000'],
            'agree_terms' => ['accepted'],
        ]);

        $ticketPrice = self::TICKET_PRICES[$validated['ticket_tier']];
        $subtotal = $ticketPrice * $validated['ticket_quantity'];
        $tax = (int) round($subtotal * self::TAX_RATE);

        unset($validated['agree_terms']);

        $registration = TicketRegistration::create([
            ...$validated,
            'ticket_price' => $ticketPrice,
            'subtotal' => $subtotal,
            'tax' => $tax,
            'convenience_fee' => self::CONVENIENCE_FEE,
            'total' => $subtotal + $tax + self::CONVENIENCE_FEE,
            'promo_code' => isset($validated['promo_code'])
                ? strtoupper($validated['promo_code'])
                : null,
        ]);

        Mail::to($validated['buyer_email'])->send(
            new RegistrationEmail($registration)
        );

        return to_route('registration.success', $registration);
    }

    public function success(TicketRegistration $registration): View
    {
        return view('registration-successful', compact('registration'));
    }
}
