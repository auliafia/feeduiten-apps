<?php

use App\Http\Controllers\TransaksiController;

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [TransaksiController::class, 'index']);
Route::post('/simpan', [TransaksiController::class, 'store']);
Route::get('/update/{id}', [TransaksiController::class, 'getById']);
Route::put('/update/{id}', [TransaksiController::class, 'update']);
Route::delete('/delete/{id}', [TransaksiController::class, 'destroy']);
