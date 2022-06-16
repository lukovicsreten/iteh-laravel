<?php

use App\Http\Controllers\AuthKontroler;
use App\Http\Controllers\HalaKontroler;
use App\Http\Controllers\KoncertKontroler;
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




Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('hala', HalaKontroler::class);
    Route::resource('koncert', KoncertKontroler::class);
    Route::post('logout', [AuthKontroler::class, 'logout']);
});

Route::post('register', [AuthKontroler::class, 'register']);
Route::post('login', [AuthKontroler::class, 'login']);
