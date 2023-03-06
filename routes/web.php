<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\NoteController;
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

// Route::get('/', function () {
// 	return view('welcome');
// });


Route::get('/chart', [ChartJSController::class, 'index'])->name('chart');

Route::middleware('auth')->group(function () {
	Route::get('/', [DashboardController::class, 'index'])
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


});
