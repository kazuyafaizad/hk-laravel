<?php

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

// Route::get('/', function () {
//     return \File::get(public_path() . '/Restaurantly/index.php');
// });



Route::get('/',[App\Http\Controllers\KambingController::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');;

require __DIR__.'/auth.php';
