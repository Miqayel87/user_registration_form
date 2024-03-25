<?php

use App\Http\Controllers\Auth\RegistrationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });
});

Auth::routes();

Route::get('/registration', [RegistrationController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/signUp', [RegistrationController::class, 'signUp'])->name('sign-up');

