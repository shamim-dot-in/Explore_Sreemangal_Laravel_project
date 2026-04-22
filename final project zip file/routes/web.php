<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [ContactController::class, 'create'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/contacts', [ContactController::class, 'index'])->name('contacts.index');


Route::get('/destinations', [DestinationController::class, 'index']);

Route::get('/hotels', [HotelController::class, 'index']);

Route::get('/tours', [TourController::class, 'index']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/tours/{tour}/book', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/tours/{tour}/book', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/my-bookings', [BookingController::class, 'userBookings'])->name('user.bookings');

    Route::get('/my-bookings/{booking}/edit', [BookingController::class, 'edit'])->name('bookings.edit');
    Route::put('/my-bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');
    Route::delete('/my-bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/bookings', [BookingController::class, 'adminIndex'])->name('bookings.index');
    Route::patch('/bookings/{booking}/status', [BookingController::class, 'adminUpdateStatus'])->name('bookings.status');

    Route::get('/tours', [TourController::class, 'adminIndex'])->name('tours.index');
    Route::get('/tours/create', [TourController::class, 'createAdmin'])->name('tours.create');
    Route::post('/tours', [TourController::class, 'storeAdmin'])->name('tours.store');
    Route::get('/tours/{tour}/edit', [TourController::class, 'editAdmin'])->name('tours.edit');
    Route::put('/tours/{tour}', [TourController::class, 'updateAdmin'])->name('tours.update');
    Route::delete('/tours/{tour}', [TourController::class, 'destroyAdmin'])->name('tours.destroy');

    Route::get('/hotels', [HotelController::class, 'adminIndex'])->name('hotels.index');
    Route::get('/hotels/create', [HotelController::class, 'createAdmin'])->name('hotels.create');
    Route::post('/hotels', [HotelController::class, 'storeAdmin'])->name('hotels.store');
    Route::get('/hotels/{hotel}/edit', [HotelController::class, 'editAdmin'])->name('hotels.edit');
    Route::put('/hotels/{hotel}', [HotelController::class, 'updateAdmin'])->name('hotels.update');
    Route::delete('/hotels/{hotel}', [HotelController::class, 'destroyAdmin'])->name('hotels.destroy');


    Route::get('/destinations', [DestinationController::class, 'adminIndex'])->name('destinations.index');
    Route::get('/destinations/create', [DestinationController::class, 'createAdmin'])->name('destinations.create');
    Route::post('/destinations', [DestinationController::class, 'storeAdmin'])->name('destinations.store');
    Route::get('/destinations/{destination}/edit', [DestinationController::class, 'editAdmin'])->name('destinations.edit');
    Route::put('/destinations/{destination}', [DestinationController::class, 'updateAdmin'])->name('destinations.update');
    Route::delete('/destinations/{destination}', [DestinationController::class, 'destroyAdmin'])->name('destinations.destroy');
});

require __DIR__.'/auth.php';
