<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\AccommodationController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

// Frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('about', [AboutController::class, 'index']);
Route::get('accommodation', [AccommodationController::class, 'index']);
Route::get('gallery', [GalleryController::class, 'index']);
Route::get('contact', [ContactController::class, 'index']);
