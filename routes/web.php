<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [PagesController::class, 'index']);
Route::post('/currencyrate', [PagesController::class, 'CurrencyRate']);


Auth::routes();

Route::get('user/transactions',[UserController::class, 'transactions'])->name('transactions')->middleware('auth');
Route::get('/user/home', [UserController::class, 'index'])->name('home')->middleware('auth');
Route::post('/user/request', [UserController::class, 'request'])->name('request')->middleware('auth');
Route::post('/user/confirm/request', [UserController::class, 'confirm_request'])->name('confirmrequest')->middleware('auth');


Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('is_admin');
Route::put('/edit/rates', [AdminController::class, 'edit_Rate'])->name('edit.rate')->middleware('is_admin');
Route::get('/admin/view/tramsactions', [AdminController::class, 'all_transacts'])->name('admin.alltransact')->middleware('is_admin');
Route::get('/admin/clients', [AdminController::class, 'all_clients'])->name('admin.clients')->middleware('is_admin');
Route::Post('/admin/search', [AdminController::class, 'search'])->name('admin.search')->middleware('is_admin');
