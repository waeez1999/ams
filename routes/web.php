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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Application Routes

Route::get('/all-applicants', [ApplicationController::class, 'index'])->name('allApplicant');
Route::get('/add-applicant', [ApplicationController::class, 'create'])->name('addApplicant');
Route::post('/add-applicant', [ApplicationController::class,'store']);
Route::get('/applicants/{id}', [ApplicationController::class,'display']);
