<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\OfflineController;



Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('profile-pilot', [ProfileController::class, 'pilot'])->name('profile-pilot')->middleware('auth');
Route::get('profile-student', [ProfileController::class, 'student'])->name('profile-student')->middleware('auth');

Route::get('register-student', [ProfileController::class, 'register'])->name('register-student');
Route::post('register-student', [ProfileController::class, 'store'])->name('store-student');

Route::get('edit-profile', [ProfileController::class, 'edit'])->name('edit-profile')->middleware('auth');
Route::patch('edit-profile/{id}', [ProfileController::class, 'update'])->name('update-profile');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('offers', [OfferController::class, 'index'])->name('offers');
Route::get('offers/card/{id}', [OfferController::class, 'card'])->name('offer-card')->middleware('auth');
Route::get('offers/candidate/{id}', [OfferController::class, 'candidate'])->name('candidate')->middleware('auth');
Route::get('offers/create', [OfferController::class, 'add_offer'])->name('add-offer');
Route::post('offers/create', [OfferController::class, 'store'])->name('store-offer');
Route::delete('offers/card/{id}', [OfferController::class, 'destroy_offer'])->name('destroy-offer');

Route::get('companies', [CompaniesController::class, 'index'])->name('companies');
Route::get('companies/card/{id}', [CompaniesController::class, 'card_company'])->name('card-company');

Route::get('students', [UsersController::class, 'students'])->name('students');
Route::get('pilots', [UsersController::class, 'pilots'])->name('pilots');
Route::get('pilots/card/{id}', [UsersController::class, 'card_pilot'])->name('card-pilot')->middleware('auth');
Route::get('students/card/{id}', [UsersController::class, 'card_student'])->name('card-student')->middleware('auth');
Route::delete('students/card/{id}', [UsersController::class, 'destroy_student'])->name('destroy-student');

Route::get('search', [SearchController::class, 'index'])->name('search');

// Route::get('offline', [OfflineController::class, 'index'])->name('offline');