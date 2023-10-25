<?php

use App\Http\Controllers\CountryControllers;
use Illuminate\Support\Facades\Route;

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
    return view('countrys.store');
});
Route::get('/iniciodeseccion', function () {
    return view('countrys.inicio_seccion');
});
Route::get('/registro', function () {
    return view('countrys.store');
});
Route::get('/busqueda', function () {
    return view('countrys.busqueda');
});
Route::get('/ffd', function () {
    return view('welcome');
});


Route::get('/country',[CountryControllers::class,'index'])->name('country.index');
Route::post('/country',[CountryControllers::class,'store'])->name('country.store');
