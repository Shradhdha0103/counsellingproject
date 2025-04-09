<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home')->name('home');
// });


Route::get('/', [HomeController::class, 'home'])->name('home');

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
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
// Route::get('privacy', function () {
//     return view('privacy');
// })->name('privacy');
// Route::get('cms/{slug}', [HomeController::class, 'menushow'])->name('cms.show');


Route::get('menucms', function () {
    return view('cms');
})->name('menucms');
Route::get('/displaymenu/{slug}', [HomeController::class, 'displaymenu'])->name('displaymenu');

Route::get('/blogs', [HomeController::class, 'displayblogs'])->name('blogs');
Route::get('/blogs/{slug}', [HomeController::class, 'blogDetails'])->name('blogdetails');
Route::get('/services/{slug}', [HomeController::class, 'services'])->name('servicedetails');

// Route::get('contact', function () {
//     return view('contact');
// })->name('contact');

Route::get('schedule-a-consultation', function () {
    return view('schedule-a-consultation');
})->name('schedule-a-consultation');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('admin', [HomeController::class, 'index'])->name('dashborad');

    // Setting
    Route::get('setting', [HomeController::class, 'setting'])->name('setting');
    Route::put('/settings/{id}', [HomeController::class, 'updateSettings'])->name('updateSettings');

    //CMS
    Route::get('cms', [HomeController::class, 'cms'])->name('cms');
    Route::get('storecms', [HomeController::class, 'storecms'])->name('storecms');
    Route::post('addcms', [HomeController::class, 'addcms'])->name('addcms');
    Route::get('/edit-cms/{id}', [HomeController::class, 'editcms'])->name('edit-cms');
    Route::post('update_cms', [HomeController::class, 'editCMSData'])->name('edit-cms-data');
    Route::delete('/delete-cms/{id}', [HomeController::class, 'deleteCMS'])->name('delete-cms');

    //Users
    Route::get('allUsers', [HomeController::class, 'allUsers'])->name('allUsers');
    Route::get('allcontactus', [HomeController::class, 'allcontactus'])->name('allcontactus');

    //Services
    Route::get('service_list', [HomeController::class, 'service_list'])->name('service_list');
    Route::get('add_service', [HomeController::class, 'store'])->name('add_service');
    Route::post('add_service', [HomeController::class, 'add_service'])->name('add_services');
    Route::get('/edit-service/{id}', [HomeController::class, 'editservice'])->name('edit-service');
    Route::post('update_service', [HomeController::class, 'editServiceData'])->name('edit-service-data');
    Route::delete('/delete-service/{id}', [HomeController::class, 'deleteService'])->name('delete-service');

    //Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Blog
    Route::get('/bloglist', [HomeController::class, 'blogs'])->name('bloglist');
    Route::get('/addblog', [HomeController::class, 'addblog'])->name('addblog');
    Route::post('/addblogs', [HomeController::class, 'addblogs'])->name('addblogs');
    Route::get('/edit-blog/{id}', [HomeController::class, 'editblog'])->name('edit-blog');
    Route::post('/edit-blog-data', [HomeController::class, 'editBlogData'])->name('edit-blog-data');
    Route::delete('/delete-blog/{id}', [HomeController::class, 'deleteBlog'])->name('delete-blog');

    // SEO
    Route::get('/seo_details', [HomeController::class, 'seo_details'])->name('seo_details');
    Route::get('/add-seo', [HomeController::class, 'storeseo'])->name('add-seo');
    Route::post('/add-seo', [HomeController::class, 'addSEO'])->name('add_seo');
    Route::get('/edit-seo/{id}', [HomeController::class, 'editSEO'])->name('edit-seo');
    Route::post('/edit-seo-data', [HomeController::class, 'editSEOData'])->name('edit-seo-data');
    Route::delete('/delete-seo/{id}', [HomeController::class, 'deleteSEO'])->name('delete-seo');
});


Route::get('/consult', [ConsultationController::class, 'showConsultationForm'])->name('consultation.form');
Route::post('/book-consultation', [ConsultationController::class, 'bookConsultation'])->name('book.consultation');
require __DIR__ . '/auth.php';

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contacts.store');
Route::post('/send-email', [ContactController::class, 'send'])->name('send-email');



// Login Route
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

// Register Route
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

// Profile Route
Route::get('profile', [AuthController::class, 'showProfile'])->name('profile')->middleware('auth');

// Logout Route
Route::post('logout', [AuthController::class, 'logout'])->name('logout');