<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeografiController;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\BeachController;
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

Route::get('/beach',[BeachController::class,'index'])->name('beach.index');
Route::get('/beach/create',[BeachController::class,'create'])->name('beach.create');
Route::post('/beach/store',[BeachController::class,'store'])->name('beach.store');
Route::delete('/beach/{id}', [BeachController::class, 'destroy'])->name('beach.destroy');

Route::get('/sejarah',[SejarahController::class,'index']);

Route::get('/geografi',[GeografiController::class,'index']);

Route::get('/pariwisata',[PariwisataController::class,'index']);
