<?php

use App\Http\Controllers\Admin\SymbolController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\PageController::class, 'index'])->name('home');
Route::get('/assets-browse', [App\Http\Controllers\AssetsBrowseController::class, 'assetsBrowse'])->name('assets-browse');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/portfolio', [App\Http\Controllers\PageController::class, 'portfolio'])->name('portfolio');
Route::group(['middleware' => 'auth'], function() {

});

Route::get('admin-login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin-login');
Route::post('admin/dashboard', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin-login');

Route::group(['middleware' => ['middleware'=>'admin'], 'prefix' => 'admin'], function() {
    Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');
    Route::resource('symbol', SymbolController::class);
});
