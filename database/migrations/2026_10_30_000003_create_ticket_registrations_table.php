<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ticket_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_tier', 20);
            $table->unsignedTinyInteger('ticket_quantity');
            $table->unsignedBigInteger('ticket_price');
            $table->unsignedBigInteger('subtotal');
            $table->unsignedBigInteger('tax');
            $table->unsignedBigInteger('convenience_fee');
            $table->unsignedBigInteger('total');
            $table->string('payment_method', 30);
            $table->string('buyer_name');
            $table->string('buyer_email');
            $table->string('buyer_phone', 30);
            $table->string('identity_number', 50);
            $table->string('buyer_city', 100)->nullable();
            $table->string('promo_code', 50)->nullable();
            $table->text('special_notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ticket_registrations');
    }
};
