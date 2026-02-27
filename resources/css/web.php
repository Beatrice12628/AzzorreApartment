<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'welcome'])->name('welcome');

Route::get('/photos', [PagesController::class, 'photos'])->name('pages.photos');

Route::get('/contatti',[PagesController::class, 'form'])->name('pages.contacts');
Route::post('/contatti',[PagesController::class, 'sendMail'])->name('contacts.sendMail');

Route::get('/privacy', [PagesController::class, 'privacy'])->name('pages.privacy');