<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Application Routes

Route::get('/add-applicant', [ApplicationController::class, 'create'])->name('addApplicant');
Route::post('/add-applicant', [ApplicationController::class,'store']);