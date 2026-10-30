<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketRegistration extends Model
{
    protected $fillable = [
        'ticket_tier',
        'ticket_quantity',
        'ticket_price',
        'subtotal',
        'tax',
        'convenience_fee',
        'total',
        'payment_method',
        'buyer_name',
        'buyer_email',
        'buyer_phone',
        'identity_number',
        'buyer_city',
        'promo_code',
        'special_notes',
    ];

    protected function casts(): array
    {
        return [
            'ticket_price' => 'integer',
            'ticket_quantity' => 'integer',
            'subtotal' => 'integer',
            'tax' => 'integer',
            'convenience_fee' => 'integer',
            'total' => 'integer',
        ];
    }
}
