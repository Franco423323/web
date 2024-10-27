<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::resource('productos', App\Http\Controllers\ProductoController::class);
