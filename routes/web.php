<?php

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
//Route::get('email/verify/{token}','EmailController@verify');
Route::get('email/verify/{token}',['as' => 'email.verify', 'uses' => 'EmailController@verify']);
//Route::get('/demo', function () {
//    return new App\Mail\RegisterValidate();
//});
Route::resource('questions','QuestionsController');
Route::post('questions/{question}/answer','AnswersController@store');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
