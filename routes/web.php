<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

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
Route::get('/home', function () {
    return view('pages.trainee.home');
})->name('home');
Route::get('/report', function () {
    return view('pages.trainee.reportDaily');
})->name('report');
Route::get('/historyReport', function () {
    return view('pages.trainee.historyReport');
})->name('historyReport');
Route::get('/profile', function () {
    return view('pages.trainee.profile');
})->name('profile');
Route::get('/detailCourse', function () {
    return view('pages.trainee.detailCourse');
})->name('detailCourse');
Route::get('/detailSubject', function () {
    return view('pages.trainee.detailSubject');
})->name('detailSubject');
Route::get('/detailReport', function () {
    return view('pages.trainee.detailReport');
})->name('detailReport');
Route::get('language/{language}', [LanguageController::class, 'index'])->name('language');
