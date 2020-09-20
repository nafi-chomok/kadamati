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
Route::get('/show', function () {
    return view('pages.property.show_property');
});
Route::get('/property/show/{property}', 'PropertyController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create-property', 'PropertyController@create');
Route::post('/create-property', 'PropertyController@store');
Route::get('/', 'PropertyController@index');
Route::post('/register/user', 'auth\RegisterController@createUser');
Route::get('/home', 'auth\RegisterController@getUsers');
Route::delete('/delete/{user}', 'auth\RegisterController@deleteUser');

Route::get('/employee/home', function () {
    return view('pages.user_home');
})->name('user.home');

Route::get('/contact-us', 'ContactController@create');
Route::post('/contact-us', 'ContactController@store');

Route::get('/contact-us-index', 'ContactController@index');
Route::delete('/contact-us-index/delete/{contact}', 'ContactController@delete');


Route::get('/about-us', function () {
    return view('pages.about_us');
});
