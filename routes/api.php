<?php


use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\GlobalController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//API PROVINSI
Route::get('provinsi',[ProvinsiController::class, 'index']);
Route::post('provinsi',[ProvinsiController::class, 'store']);
Route::get('provinsi/{id}',[ProvinsiController::class, 'show']);
Route::delete('provinsi/{id}',[ProvinsiController::class, 'destroy']);

//API KASUS
Route::get('kasus2',[ApiController::class, 'index']);
Route::get('kasus2/provinsi2',[ApiController::class, 'provinsi2']);
Route::get('kasus2/provinsi2/kota2',[ApiController::class, 'kota2']);
Route::get('kasus2/provinsi2/kota2/kecamatan2',[ApiController::class, 'kecamatan2']);
Route::get('kasus2/provinsi2/kota2/kecamatan2/kelurahan2',[ApiController::class, 'kelurahan2']);
Route::get('global',[ApiController::class, 'global']);