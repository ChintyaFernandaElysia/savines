<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IncomeController;

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
//testttt angel
// Route::get('/', function () {
//     return view('welcome');
// });

//Income
// Route::get('/income', [IncomeController::class, 'index']);
// Route::get('/income/add', [IncomeController::class, 'add']);
// Route::post('/income/store', [IncomeController::class, 'store']);
// Route::get('/income/edit/{id}', [IncomeController::class, 'edit']);
// Route::post('/income/update/{id}', [IncomeController::class, 'update']);
// Route::get('/income/destroy/{id}', [IncomeController::class, 'destroy']);


Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSimpan')->name('register.simpan');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAksi')->name('login.aksi');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


