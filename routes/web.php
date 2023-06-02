<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditPenjahit;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PenjahitController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PesananPenjahitController;
use App\Http\Controllers\PesananClientController;
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

Route::get('/', function () {
    return view('landingpage');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/detail/{id}', [DashboardController::class, 'detail'])->middleware(['auth', 'verified'])->name('dashboard.detail');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [EditPenjahit::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('form')->group(function () {
    Route::resource('gallery', GalleryController::class);
    Route::resource('penjahit', PenjahitController::class);
    Route::resource('penjahit/edit', EditPenjahit::class);
    Route::post('pesanan/update/{id}', [PesananPenjahitController::class, 'update'])->name('pesanan.update');
    Route::post('pesanan/status/{id}', [PesananPenjahitController::class, 'status'])->name('pesanan.status');
    Route::resource('pesanan', PesananPenjahitController::class);
    Route::resource('cart', PesananClientController::class);
});


Route::resource('order', OrderController::class);


require __DIR__.'/auth.php';
