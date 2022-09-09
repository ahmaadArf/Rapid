<?php
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ClinetController;
use App\Http\Controllers\Admin\CategryController;
use App\Http\Controllers\Admin\DetaileController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())->group(function () {

Route::prefix('admin')->name('admin.')->group(function () {
Route::get('/',[AdminController::class,'index'])->name('index');

Route::resource('clients',ClinetController::class);
Route::resource('categries',CategryController::class);
Route::resource('detailes',DetaileController::class);
Route::resource('images',ImageController::class);

});
});
// ->middleware('auth','check_user')
Auth::routes();
Route::view('not','not_allawd');

Route::get('/home', [HomeController::class, 'index'])->name('home');
