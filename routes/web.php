<?php

// use App\Http\Controllers\AkunController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\HargaHariIniController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


route::get('admin/dashboard', [HomeController::class,'index'])->middleware(['auth', 'admin']);
Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomersController::class, 'store'])->name('customers.store');
Route::post('/customers', [CustomersController::class, 'destroy'])->name('customers.destroy');

Route::resource('pembayaran', PembayaranController::class);
Route::resource('invoice', InvoiceController::class);
Route::resource('reservasi', ReservasiController::class);
Route::resource('harga_hari_ini', HargaHariIniController::class);


Route::resource('customers', \App\Http\Controllers\CustomersController::class);
Route::resource('kamar',\App\Http\Controllers\KamarController::class);
// Route::get('/akun/{id}', 'AkunController@show')->name('akun.show');
// Route::get('/akun/{id}/edit', 'AkunController@edit')->name('akun.edit');

