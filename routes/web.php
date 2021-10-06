<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChurchController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\MemberController;

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

Route::get('/church', [ChurchController::class, 'createForm'])->middleware('auth');

Route::post('/church', [ChurchController::class, 'ChurchForm'])->name('church.store')->middleware('auth');

Route::get('/group', [GroupController::class, 'createForm'])->middleware('auth');

Route::post('/group', [GroupController::class, 'GroupForm'])->name('group.store')->middleware('auth');

Route::get('/group/{id}', [GroupController::class, 'viewGroup']);

Route::get('/member', [MemberController::class, 'createForm'])->middleware('auth');

Route::post('/member', [MemberController::class, 'MemberForm'])->name('member.store')->middleware('auth');

Route::get('/member/{id}', [MemberController::class, 'viewMember']);

require __DIR__.'/auth.php';
