<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/gempa', [ApiController::class, 'getQuakeData'])->name('gempa');;

// Route::get('/gempa', function () {
//     $quakeData = (new ApiController())->getQuakeData();
//     $bigQuakeData = (new ApiController())->getBigQuakeData();

//     return view('quake', compact('quakeData', 'bigQuakeData'));
// }) -> name('gempa');