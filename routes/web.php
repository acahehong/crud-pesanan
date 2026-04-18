<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesananController;

Route::resource('pesanan', PesananController::class);