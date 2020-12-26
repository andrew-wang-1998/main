<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

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
    return abort(403);
});

Route::get('/children_senior_institutes', [apiController::class,"children_senior_institutes"]);
Route::get('/children_senior_inspections', [apiController::class,"children_senior_inspections"]);
Route::get('/crack_down_signals', [apiController::class,"crack_down_signals"]);
Route::get('/crack_down_nights', [apiController::class,"crack_down_nights"]);
Route::get('/crack_down_fireplugs', [apiController::class,"crack_down_fireplugs"]);
Route::get('/cctv_states', [apiController::class,"cctv_states"]);
