<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DedpixController;

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

//Route::get('/welcome', function () {
//    return view('welcome');
//});

//Versões do Laravvel inferiror a 8.0
//Route::get('/', 'DedpixController@index');

Route::get('/welcome', [DedpixController::class, 'index']);
