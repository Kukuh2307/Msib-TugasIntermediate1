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

Route::get('/sejarah',[SejarahController::class,'index']);
Route::get('/sejarah/edit',[SejarahController::class,'edit']);

Route::get('/geografi',[GeografiController::class,'index']);

Route::get('/pariwisata',[PariwisataController::class,'index']);
