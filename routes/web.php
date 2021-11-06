<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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
    return view('welcome');
});

Route::get('/currency', function () {
    return Http::get('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');
});

Route::get('/weather/kyiv', [WeatherController::class, 'kyiv']);
Route::get('/weather', [WeatherController::class, 'city']);
Route::post('/weather', [WeatherController::class, 'city']);
Route::get('/weather/list', [WeatherController::class, 'list']);
