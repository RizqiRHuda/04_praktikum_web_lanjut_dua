<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContatcController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PengalamanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('home');

Route::get('/pageHome', [HomeController::class,'index'])->name('pageHome');

Route::get('/contact', [App\Http\Controllers\ContatcController::class, 'contact'])->name('contact');

Route::get('/profile/{profile?}', [ProfileController::class, 'profile'])->name('profile');

Route::get('/pengalaman', [App\Http\Controllers\ExperienceController::class, 'experience'])->name('pengalaman');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
