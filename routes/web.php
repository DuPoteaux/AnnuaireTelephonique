<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [App\Http\Controllers\ContactController::class, 'index'])->name('home');
Route::get('/contacts/create', [App\Http\Controllers\ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');
Route::get('/contacts/edit/{id}', [App\Http\Controllers\ContactController::class,'edit'])->name('contacts.edit');
Route::post('/contacts/update/{id}', [App\Http\Controllers\ContactController::class,'update'])->name('contacts.update');
Route::get('/contacts/delete/{id}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contacts.destroy');
Route::get('/contact/{id}/show', [App\Http\Controllers\ContactController::class, 'show'])->name('contacts.show');
