<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\UsersController;



Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('dashboard', DashboardController::class)->name('dashboard')->middleware('auth');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('offers', [OfferController::class, 'index'])->name('offers');

Route::get('companies', [CompaniesController::class, 'index'])->name('companies');

Route::get('students', [UsersController::class, 'students'])->name('students');

Route::get('pilots', [UsersController::class, 'pilots'])->name('pilots');