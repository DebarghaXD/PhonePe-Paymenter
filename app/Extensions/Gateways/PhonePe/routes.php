<?php

use Illuminate\Support\Facades\Route;

Route::post('/phonepe/callback', [\App\Extensions\Gateways\PhonePe\PhonePe::class, 'callback'])->name('phonepe.callback');

Route::get('/phonepe/debargha', function () {return redirect('https://debargha.in');});