<?php

use App\Http\Controllers\weatherController;
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

// current api view route
Route::get('/', function () {
    return view('home');
});
Route::get('/current-weather', [weatherController::class, 'currentWeather']);

// hourly weather api view route
Route::get('/hours-weather-view', [weatherController::class, 'hoursWeatherView']);
Route::get('/hours-weather', [weatherController::class, 'hoursWeather']);

// daily weather api view route
Route::get('/days-weather-view', [weatherController::class, 'daysWeatherView']);
Route::get('/days-weather', [weatherController::class, 'daysWeather']);


