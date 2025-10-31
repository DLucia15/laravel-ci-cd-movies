<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewAPIController;

Route::resource('api-movies', NewAPIController::class);