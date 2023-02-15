<?php

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
//testttt angel
Route::get('/', function () {
    return view('welcome');
});

//Income
Route::get('/income', [IncomeController::class, 'index']);
Route::get('/income/add', [IncomeController::class, 'add']);
Route::post('/income/store', [IncomeController::class, 'store']);
Route::get('/income/edit/{id}', [IncomeController::class, 'edit']);
Route::post('/income/update/{id}', [IncomeController::class, 'update']);
Route::get('/income/destroy/{id}', [IncomeController::class, 'destroy']);