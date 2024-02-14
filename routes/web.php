
<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::view('/register', 'register.index')->name('register.index');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');
Route::view('/', 'main.main')->name('main.index');
Route::view('register', 'register.index')->name('register.index');
Route::view('/login', 'login.index')->name('login.index');
Route::get('/logout', LogoutController::class)->name('logout');
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');

Route::view('/form', 'form.index');
