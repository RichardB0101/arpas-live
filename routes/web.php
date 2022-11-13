<?php

use App\Models\Assignment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

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


Route::get('/home', function () {
    return view('home')->name('home');
});


//Arpas stronki
Route::middleware(['auth'])->group(function () {
    Route::get('/wykladowca', [RouteController::class, 'index'])->name('wykladowca.katalog_prac');
    Route::get('/ocena-prac', [RouteController::class, 'viewOcenianiePrac'])->name('wykladowca.ocena_prac');;
});

Route::get('/prace/{prace}', function (Assignment $prace){
    return view('demo', [compact('prace')]);
})->name('praca');

require __DIR__.'/auth.php';



