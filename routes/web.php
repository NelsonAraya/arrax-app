<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfpController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::prefix('admin')->group(function () {
    Route::get('/afps/all',[AfpController::class,'showAll'])
	->name('afps.all');
    Route::resource('afps',AfpController::class);
});
