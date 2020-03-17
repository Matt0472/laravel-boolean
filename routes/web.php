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

// creiamo una rotta, che ha come controller uno Static page controller
Route::get('/', 'StaticPageController@index')->name('static_page.home');
Route::get('/privacy', 'StaticPageController@privacy')->name('static_page.privacy');
Route::get('/domande-frequenti', 'StaticPageController@faq')->name('static_page.faq');


// creaimo una rotta con il controller per gli studenti
Route::get('/students', 'StudentController@index')->name('student.index');
Route::get('/students/show/{id}', 'StudentController@show')->name('student.show');
