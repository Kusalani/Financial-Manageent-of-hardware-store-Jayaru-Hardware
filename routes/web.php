<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task1Controller;
use App\Http\Controllers\Task2Controller;
use App\Http\Controllers\Task3Controller;
use App\Http\Controllers\SearchController;
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
Route::resource('/task1s',Task1Controller::class);
//Route::get('/task1s','Task1Controller@task1s');
//Route::resource('task1s','Task1Controller');
Route::resource('/task2s',Task2Controller::class);
Route::resource('/task3s',Task3Controller::class);
Route::get('/search',[SearchController::class,'search'])->name('web.search');

