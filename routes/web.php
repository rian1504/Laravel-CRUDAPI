<?php

use App\Http\Controllers\TampilanController;
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

Route::get('/', [TampilanController::class, 'index']);

Route::get('/tambah', [TampilanController::class, 'tambah']);
Route::post('/tambah', [TampilanController::class, 'store']);

Route::get('/edit/{id}', [TampilanController::class, 'edit']);
Route::post('/edit', [TampilanController::class, 'update']);

Route::get('/hapus/{id}', [TampilanController::class, 'hapus']);
