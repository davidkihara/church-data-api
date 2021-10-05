<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChurchController;

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

Route::get('/', [ChurchController::class, 'viewChurches']);

Route::get('/church/{id}', [ChurchController::class, 'viewChurch']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/church', [ChurchController::class, 'createForm']);

Route::post('/church', [ChurchController::class, 'ChurchForm'])->name('church.store');

require __DIR__.'/auth.php';
