<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

// Home page - show links to all pages
Route::get('/', [PhotoController::class, 'home']);

// Show each page of the album
Route::get('/page/{number}', [PhotoController::class, 'showPage']);
