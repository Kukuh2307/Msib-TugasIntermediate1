<?php

use App\Http\Controllers\GeografiController;
use App\Http\Controllers\PariwisataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SejarahController;

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

Route::get('/sejarah',[SejarahController::class,'index']);

Route::get('/geografi',[GeografiController::class,'index']);

Route::get('/pariwisata',[PariwisataController::class,'index']);
