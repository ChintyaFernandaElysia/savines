<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChartJSController;
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

Route::controller(AuthController::class)->group(function () {
	Route::get('register', 'register')->name('register');
	Route::post('register', 'registerStore')->name('register.store');

	Route::get('login', 'login')->name('login');
	Route::post('login', 'loginAction')->name('login.action');

	Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/', function () {
	return view('welcome');
});

Route::get('/chart', [DashboardController::class, 'chart']);

Route::middleware('auth')->group(function () {
	Route::get('dashboard', [DashboardController::class, 'index'])
	->name('dashboard');

    // Route::get('/product', [ProductController::class, 'index']);


	// Route::controller(BarangController::class)->prefix('barang')->group(function () {
	// 	Route::get('', 'index')->name('barang');
	// 	Route::get('tambah', 'tambah')->name('barang.tambah');
	// 	Route::post('tambah', 'simpan')->name('barang.tambah.simpan');
	// 	Route::get('edit/{id}', 'edit')->name('barang.edit');
	// 	Route::post('edit/{id}', 'update')->name('barang.tambah.update');
	// 	Route::get('hapus/{id}', 'hapus')->name('barangg.hapus');
	// });

	// Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
	// 	Route::get('', 'index')->name('kategori');
	// 	Route::get('tambah', 'tambah')->name('kategori.tambah');
	// 	Route::post('tambah', 'simpan')->name('kategori.tambah.simpan');
	// 	Route::get('edit/{id}', 'edit')->name('kategori.edit');
	// 	Route::post('edit/{id}', 'update')->name('kategori.tambah.update');
	// 	Route::get('hapus/{id}', 'hapus')->name('kategori.hapus');
	// });

	Route::controller(IncomeController::class)->prefix('incomes')->group(function () {
		Route::get('', 'index')->name('incomes');
		Route::get('create', 'create')->name('incomes.create');
		Route::post('store', 'store')->name('incomes.store');
		Route::get('edit/{id}', 'edit')->name('incomes.edit');
		Route::post('edit/{id}', 'update')->name('incomes.update');
		Route::get('destroy/{id}', 'destroy')->name('incomes.destroy');
	});

	//Route::resource('incomes', IncomeController::class);
});
