<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\TypeController;

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

Route::get('/add-watch', [WatchController::class, 'create']);
Route::post('/add-watch', [WatchController::class, 'store']);

Route::get('/add-type', [TypeController::class, 'create']);
Route::post('/add-type', [TypeController::class, 'store']);

require __DIR__.'/auth.php';
