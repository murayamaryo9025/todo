<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthorController;

Route::get('/find', [AuthorController::class, 'find']);
Route::post('/find', [AuthorController::class, 'search']);
Route::get('/', [ContactController::class, 'index']);
Route::POST('/contacts/confirm', [ContactController::class, 'confirm']);
 Route::post('/contacts', [ContactController::class, 'store']);
