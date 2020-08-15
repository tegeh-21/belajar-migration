<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', 'AuthController@login');
Route::get('/dashboard', 'DashboardController@index');

Route::get('/login', 'AuthController@login');
Route::post('/postlogin', 'AuthController@postlogin');

Route::get('/register', 'AuthController@register');
Route::post('/postregister', 'AuthController@postregister');

Route::get('/logout', 'AuthController@logout');

// Route::get('/pertanyaan', 'PertanyaanController@index');
// Route::get('/pertanyaan/create', 'PertanyaanController@create');
// Route::get('/jawaban/create', 'JawabanController@create');
// Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');
// Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');

// Route::post('/pertanyaan', 'PertanyaanController@store');
// Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update');
// Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy');

Route::resource('pertanyaan', 'PertanyaanController');
Route::resource('jawaban', 'JawabanController');


// Route::get('/pertanyaan/create', 'PertanyaanController@create');
// Route::get('/jawaban', 'JawabanController@index');
// Route::post('/jawaban', 'JawabanController@store');

Route::put('up-vote/{idPertanyaan}', 'VoteController@upVote');
Route::put('down-vote/{idPertanyaan}', 'VoteController@downVote');

//Auth::routes();

