<?php

namespace Tests\Feature;

use App\Mail\RegistrationEmail;
use App\Models\TicketRegistration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class TicketRegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_ticket_registration_is_saved_and_email_is_sent(): void
    {
        Mail::fake();

        $response = $this->post(route('ticket.send'), [
            'ticket_tier' => 'vip',
            'ticket_quantity' => 1,
            'payment_method' => 'bca_va',
            'buyer_name' => 'Life',
            'buyer_email' => 'kenjo@example.com',
            'buyer_phone' => '08123456789',
            'identity_number' => '3171000000000001',
            'buyer_city' => 'Surabaya',
            'agree_terms' => '1',
        ]);

        $response->assertRedirect(route('registration.success', 1));

        $this->assertDatabaseHas('ticket_registrations', [
            'buyer_email' => 'kenjo@example.com',
            'ticket_tier' => 'vip',
            'ticket_quantity' => 1,
            'total' => 3160000,
        ]);

        Mail::assertSent(RegistrationEmail::class, function (RegistrationEmail $mail): bool {
            return $mail->user_email === 'kenjo@example.com'
                && $mail->user_name === 'Life'
                && $mail->registration->ticket_tier === 'vip'
                && $mail->registration->ticket_quantity === 1;
        });
    }
}
