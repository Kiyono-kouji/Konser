<?php

use App\Http\Controllers\TicketRegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tickets');
})->name('home');

Route::get('/tickets', function () {
    return view('tickets');
})->name('tickets');

Route::post('/tickets', [TicketRegistrationController::class, 'store'])
    ->name('ticket.send');

Route::get('/registration/success/{registration}', [TicketRegistrationController::class, 'success'])
    ->name('registration.success');
