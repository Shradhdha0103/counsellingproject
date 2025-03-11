<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('counselor', function () {
    return view('counselor');
})->name('counselor');
Route::get('services', function () {
    return view('services');
})->name('services');
Route::get('individual_therapy', function () {
    return view('services.individual_therapy');
})->name('individual_therapy');
Route::get('couples_counseling', function () {
    return view('services.couples_counseling');
})->name('couples_counseling');
Route::get('teenagers', function () {
    return view('services.teenagers');
})->name('teenagers');
Route::get('adhd_support', function () {
    return view('services.adhd_support');
})->name('adhd_support');
Route::get('trauma_informed', function () {
    return view('services.trauma_informed');
})->name('trauma_informed');
Route::get('dbt_group', function () {
    return view('services.dbt_group');
})->name('dbt_group');
Route::get('multilingual_clients', function () {
    return view('services.multilingual_clients');
})->name('multilingual_clients');
Route::get('pricing', function () {
    return view('pricing');
})->name('pricing');
Route::get('blog', function () {
    return view('blog');
})->name('blog');
Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('schedule-a-consultation', function () {
    return view('schedule-a-consultation');
})->name('schedule-a-consultation');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/consult', [ConsultationController::class, 'showConsultationForm'])->name('consultation.form');
Route::post('/book-consultation', [ConsultationController::class, 'bookConsultation'])->name('book.consultation');
require __DIR__ . '/auth.php';

Route::post('/contact', [ContactController::class, 'store'])->name('contacts.store');
Route::post('/send-email', [ContactController::class, 'send'])->name('send-email');
