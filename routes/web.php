<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;

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

Route::controller(AuthController::class)->group(function () {
	Route::get('register', 'register')->name('register');
	Route::post('register', 'registerStore')->name('register.store');

	Route::get('login', 'login')->name('login');
	Route::post('login', 'loginAction')->name('login.action');

	Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Route::get('/', function () {
// 	return view('welcome');
// });

Route::middleware('auth')->group(function () {
	Route::get('/', [DashboardController::class, 'index'])
	->name('dashboard');

	Route::controller(TransactionController::class)->prefix('transactions')->group(function () {
		Route::get('', 'index')->name('transactions');
		Route::get('read', 'read')->name('transactions.read');
		Route::get('create', 'create')->name('transactions.create');
		Route::post('store', 'store')->name('transactions.store');
		Route::get('{id}', 'details')->name('transactions.details');
		Route::post('update/{id}', 'update')->name('transactions.update');
		Route::get('destroy/{id}', 'destroy')->name('transactions.destroy');
	});

	Route::controller(NoteController::class)->prefix('notes')->group(function () {
		Route::get('', 'index')->name('notes');
		Route::get('read', 'read')->name('notes.read');
		Route::get('create', 'create')->name('notes.create');
		Route::post('store', 'store')->name('notes.store');
		Route::get('{id}', 'details')->name('notes.details');
		Route::post('update/{id}', 'update')->name('notes.update');
		Route::get('destroy/{id}', 'destroy')->name('notes.destroy');
	});

	Route::controller(GoalsController::class)->prefix('goals')->group(function () {
		Route::get('', 'index')->name('goals');
		Route::get('read', 'read')->name('goals.read');
		Route::get('create', 'create')->name('goals.create');
		Route::post('store', 'store')->name('goals.store');
		Route::get('{id}', 'details')->name('goals.details');
		Route::post('update/{id}', 'update')->name('goals.update');
		Route::get('destroy/{id}', 'destroy')->name('goals.destroy');
	});

});
