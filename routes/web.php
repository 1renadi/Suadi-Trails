<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HeritageSiteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MoreController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HeritageCategoryController;
use App\Http\Controllers\HeritageController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/heritage-sites', [HeritageSiteController::class, 'index'])->name('sites.index');
Route::get('/sites/{id}', [HeritageSiteController::class, 'show'])->name('sites.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/more', [MoreController::class, 'index'])->name('more');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);Route::get('/turath', [HeritageCategoryController::class, 'index'])->name('turath.index');
Route::get('/turath/{id}', [HeritageCategoryController::class, 'show'])->name('turath.show');

Route::get('/turath', [HeritageCategoryController::class, 'index'])->name('turath.index');
Route::get('/turath/{id}', [HeritageCategoryController::class, 'show'])->name('turath.show');



Route::get('/heritage/nonmaterial', [HeritageController::class, 'nonmaterial'])->name('heritage.nonmaterial');
Route::get('/heritage/religious', [HeritageController::class, 'religious'])->name('heritage.religious');
Route::get('/heritage/natural', [HeritageController::class, 'natural'])->name('heritage.natural');
Route::get('/heritage/maritime', [HeritageController::class, 'maritime'])->name('heritage.maritime');
Route::get('/heritage/clothing', [HeritageController::class, 'clothing'])->name('heritage.clothing');
Route::get('/heritage/folklore', [HeritageController::class, 'folklore'])->name('heritage.folklore');
Route::get('/sites', [HeritageController::class, 'sitesIndex'])->name('sites.index');
Route::get('/heritage-sites', [HeritageController::class, 'sitesIndex'])->name('heritage-sites.index');
Route::get('/heritage/material', [HeritageController::class, 'materialHeritage'])->name('heritage.material');
Route::get('/heritage/{id}', [HeritageController::class, 'show'])->name('heritage.show');

Route::get('/heritage/detail/{view}', [HeritageController::class, 'showDetail'])->name('heritage.showDetail');

Route::get('/heritage', [HeritageController::class, 'index'])->name('heritage.index');
Route::get('/heritage/sites', [HeritageController::class, 'sitesIndex'])->name('heritage.sites');
Route::get('/heritage/material', [HeritageController::class, 'materialHeritage'])->name('heritage.material');
Route::get('/heritage/nonmaterial', [HeritageController::class, 'nonmaterial'])->name('heritage.nonmaterial');
Route::get('/heritage/religious', [HeritageController::class, 'religious'])->name('heritage.religious');
Route::get('/heritage/natural', [HeritageController::class, 'natural'])->name('heritage.natural');
Route::get('/heritage/maritime', [HeritageController::class, 'maritime'])->name('heritage.maritime');
Route::get('/heritage/clothing', [HeritageController::class, 'clothing'])->name('heritage.clothing');
Route::get('/heritage/folklore', [HeritageController::class, 'folklore'])->name('heritage.folklore');
Route::get('/heritage/{id}', [HeritageController::class, 'show'])->name('heritage.show');
Route::get('/heritage/detail/{view}', [HeritageController::class, 'showDetail'])->name('heritage.showDetail');

Route::get('/religious-heritage', [App\Http\Controllers\HeritageController::class, 'religious'])->name('religious.heritage');
Route::get('/natural-heritage', [HeritageController::class, 'natural'])->name('natural.heritage');
Route::get('/maritime-heritage', [HeritageController::class, 'maritime'])->name('maritime.heritage');
Route::get('/clothing-heritage', [HeritageController::class, 'clothing'])->name('clothing.heritage');
Route::get('/folklore-heritage', [HeritageController::class, 'folklore'])->name('folklore.heritage');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/poems', function () {return view('poems.index');})->name('poems.index');