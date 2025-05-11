<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HeritageSiteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MoreController;
use App\Http\Controllers\LoginController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/heritage-sites', [HeritageSiteController::class, 'index'])->name('sites.index');
Route::get('/sites/{id}', [HeritageSiteController::class, 'show'])->name('sites.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/more', [MoreController::class, 'index'])->name('more');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);