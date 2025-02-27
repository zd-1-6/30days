<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchReservationController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\VatinvoiceController;

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\ReservationSearch;


Route::get('/', [JobController::class, 'index']);

Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

Route::get('/airbnb_reservations/reservations', [ReservationController::class, 'reservations'])->middleware('auth');

Route::get('/airbnb_reservations/vatinvoices', [VatinvoiceController::class, 'vatinvoices'])->middleware('auth');

Route::get('/public/search_reservations', SearchReservationController::class);

Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);

});

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/public/airbnb_reservations/reservations', [ReservationController::class, 'reservations'])->name('reservations.index');

Route::get('/public/airbnb_reservations/search', [ReservationController::class, 'search'])->name('reservations.search');