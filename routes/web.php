<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FbController;


Route::get('auth/facebook', [FbController::class, 'redirectToFacebook']);

Route::get('auth/facebook/callback', [FbController::class, 'facebookSignin']);