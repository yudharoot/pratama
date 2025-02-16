<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

Route::get('/', [PhotoController::class, 'index'])->name('home');
Route::get('/album', [PhotoController::class, 'album'])->name('album');
Route::post('/upload', [PhotoController::class, 'store'])->name('upload');
Route::delete('/delete/{id}', [PhotoController::class, 'destroy'])->name('delete');
