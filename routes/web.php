<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Livewire\MemReg;

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

Route::get('/', function () {
    return view('home/landing');
})->name('home');

// MENU: 
Route::get('/links', function () {
    return view('home/links');
})->name('links');




// MENU: ABOUT US/
Route::get('/officers_boards', function () {
    return view('home/about us/officersBoards');
})->name('offBoards');

Route::get('/subspecialty_sig', function () {
    return view('home/about us/subspecialty');
})->name('subspecialty');

Route::get('/chapter_presidents', function () {
    return view('home/about us/chapPres');
})->name('chapPres');


// MENU: ABOUT US/LEGACY
Route::get('/past_presidents', function () {
    return view('home/about us/legacy/pastPresidents');
})->name('pres');

Route::get('/psa-hymn', function () {
    return view('home/about us/legacy/PSAHymn');
})->name('hymn');

Route::get('/QJG_awardee', function () {
    return view('home/about us/legacy/QJGawardee');
})->name('QJG');

Route::get('/leadership_awardee', function () {
    return view('home/about us/legacy/leadership');
})->name('sidao');

Route::get('/venue', function () {
    return view('home/venue');
})->name('venue');

Route::get('/registration', [MemReg::class, 'render'])->name('reg');

Route::get('/registration', function () {
    return view('registration.mem-registration');
})->name('reg');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/contactInfo', [DashboardController::class, 'contactInfo'])->name('contactInfo');
    Route::get('/ledger', [DashboardController::class, 'ledger'])->name('ledger');
    Route::get('/paymentHistory', [DashboardController::class, 'paymentHistory'])->name('paymentHistory');
});


Route::get('/gallery', [GalleryController::class, 'show'])->name('gallery');
// Route::get('/dashbaord', [DashboardController::class, 'show'])->name('dashbaord');
