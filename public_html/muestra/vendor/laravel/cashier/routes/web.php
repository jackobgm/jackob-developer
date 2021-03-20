<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('payment/{id}', [PaymentControllerr::class, 'show'])->name('payment');
//Route::post('webhook', [WebhookController::class, 'handleWebhook'])->name('webhook');
