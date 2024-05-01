<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeografiController;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\BeachController;
use App\Http\Controllers\AuthController;
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


Route::get('/', function () {
    return view('layout.main');
});

// login 
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// index pantai
Route::get('/beach',[BeachController::class,'index'])->name('beach.index');
// create
Route::get('/beach/create',[BeachController::class,'create'])->name('beach.create');
// menyimpan
Route::post('/beach/store',[BeachController::class,'store'])->name('beach.store');
// tampilan edit
Route::get('beach/{id}',[BeachController::class,'edit'])->name('beach.edit');
// edit database
Route::put('beach/{id}',[BeachController::class,'update'])->name('beach.update');
// hapus database
Route::delete('/beach/{id}', [BeachController::class, 'destroy'])->name('beach.destroy');


// SEJARAH
Route::get('/sejarah',[SejarahController::class,'index'])->name('sejarah.index');
Route::get('/sejarah/{id}',[SejarahController::class,'edit']);
Route::put('/sejarah/{id}', [SejarahController::class, 'update'])->name('sejarah.update');


// GEOGRAFI
Route::get('/geografi',[GeografiController::class,'index'])->name('geografi.index');
Route::get('geografi/{id}',[GeografiController::class,'edit']);
Route::put('geografi/{id}', [GeografiController::class, 'update'])->name('geografi.update');


// PARIWISATA
Route::get('/pariwisata',[PariwisataController::class,'index'])->name('pariwisata.index');
Route::get('/pariwisata/{id}',[PariwisataController::class,'edit']);
Route::put('/pariwisata/{id}', [PariwisataController::class, 'update'])->name('pariwisata.update');
