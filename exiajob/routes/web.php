<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;



Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('profile-pilot', [ProfileController::class, 'pilot'])->name('profile-pilot')->middleware('auth');
Route::get('profile-student', [ProfileController::class, 'student'])->name('profile-student')->middleware('auth');

Route::get('register-student', [ProfileController::class, 'register'])->name('register-student');
Route::post('register-student', [ProfileController::class, 'store'])->name('store-student');

Route::get('edit-profile', [ProfileController::class, 'edit'])->name('edit-profile')->middleware('auth');
Route::patch('edit-profile/{id}', [ProfileController::class, 'update'])->name('update-profile');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('offers', [OfferController::class, 'index'])->name('offers');
Route::get('offers/card/{id}', [OfferController::class, 'card'])->name('offer-card');
Route::get('offers/card/{id}/candidate', [OfferController::class, 'candidate'])->name('candidate');

Route::get('companies', [CompaniesController::class, 'index'])->name('companies');

Route::get('students', [UsersController::class, 'students'])->name('students');

Route::get('pilots', [UsersController::class, 'pilots'])->name('pilots');