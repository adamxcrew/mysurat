<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Livewire\FaximileLivewire;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('faximile', FaximileLivewire::class);
//    Route::get('/faximile/edit/{id}', [\App\Http\Controllers\FaxController::class,'edit']);
//    Route::get('/faximile/delete/{id}', [\App\Http\Controllers\FaxController::class,'destroy']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
