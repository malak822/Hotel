<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReservationController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');
Route::post('/reservation', [ReservationController::class, 'send'])->name('reservation.send');


Route::get('/services', function(){
    return view('services');
})->name('services');



Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


Route::get('/chambres', function(){
    return view('chambres');
})->name('chambres');