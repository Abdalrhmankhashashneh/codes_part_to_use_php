<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteControler;
use App\Http\Controllers\SampleCSVController;
use App\Http\Controllers\CSVImportController;
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

Route::get('/', [SiteControler::class , 'index']);
Route::post('/add_user', [SiteControler::class , 'add_user'])->name('add_user');
Route::post('/add_exel_users', [CSVImportController::class , 'importCSV'])->name('add_exel_users');
Route::get('generate-sample-csv', [SampleCSVController::class , 'generateSampleCSV'])->name('generate-sample-csv');

