<?php

use App\Http\Controllers\CatalogController;
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


//Zalogowany wykladowca
Route::middleware(['auth'])->group(function () {
    Route::get('/profil', [RouteController::class, 'showProfil'])->name('profil');
    Route::get('/', [RouteController::class, 'showDomowa'])->name('domowa');
});

// Nauczyciel
Route::middleware(['auth', 'user.role'])->group(function () {
    Route::get('/ocena-prac', [RouteController::class, 'viewOcenianiePrac'])->name('wykladowca.ocena_prac');
    Route::view('/dodanie-katalogu', 'wykladowca_dodanie_katalogu')->name('wykladowca.dodanie_katalogu');
    Route::get('/katalogi-prac/katalog', [RouteController::class, 'index'])->name('wykladowca.katalog_prac');
    Route::get('/katalogi-prac', [CatalogController::class, 'index'])->name('wykladowca.katalogi_prac');
    Route::post('/saveCatalog', [CatalogController::class, 'make'])->name('save_catalog');
    Route::post('/delCatalog/{id}', [CatalogController::class, 'delete'])->name('del_catalog');
});

Route::get('/prace/{prace}', function (Assignment $prace){
    return view('demo', [compact('prace')]);
})->name('praca');





require __DIR__.'/auth.php';
