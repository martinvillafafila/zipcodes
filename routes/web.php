<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZipController;
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


//Ruta para testear zipcodes
Route::group(['prefix' => 'api'], function () {
    Route::get('zip-codes/{id}', [ZipController::class, 'show']);
});
