<?php

use App\Http\Controllers\MemberController;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/member',[MemberController::class, 'all']);
Route::get('/member/{id}',[MemberController::class, 'show']);
Route::post('/member',[MemberController::class, 'store']);
Route::put('/member/{id}',[MemberController::class, 'update']);
Route::delete('/member/{id}',[MemberController::class, 'delete']);
