<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PopulationController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route to see the graph whit population data from DB
Route::get('/populationData', [PopulationController::class, 'populationData'])->middleware(['auth'])->name('populationData');

//Route to see the graph whit population data from REST API
Route::get('/fromApi', [PopulationController::class, 'fromApi'])->middleware(['auth'])->name('fromApi');

require __DIR__.'/auth.php';
