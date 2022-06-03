<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/form-kandidat' , 'FormKandidatController@index')->name('form_kandiat');
Route::post('/form-kandidat' , 'FormKandidatController@store')->name('form_kandiat.store');


Auth::routes();
Route::get('/auth/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/auth/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/' , 'HomeController@index')->name('index');
Route::get('/home' , 'HomeController@index')->name('home');


Route::get('/candidate' , 'CandidateController@index')->name('candidate');
Route::get('datatables', 'CandidateController@datatables')->name('candidate.datatables');
Route::get('candidate/details/{id}', 'CandidateController@details')->name('candidate.details');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
