<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

Route::post('/phonepe/redirect', [\App\Extensions\Gateways\PhonePe\PhonePe::class, 'redirect'])->name('phonepe.redirect');

Route::post('/phonepe/callback', [\App\Extensions\Gateways\PhonePe\PhonePe::class, 'callback'])->name('phonepe.callback');