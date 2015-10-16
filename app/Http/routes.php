<?php
use App\User;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    if (Auth::check()) {
            return view('edit-profiles');
        } else {
            return view('unauth');
    }
});

// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('edit-profiles', ['middleware' => 'auth', function()
{
    return view('edit-profiles');
}]);

Route::get('/edit-name/{id}', [
    'middleware' => 'auth',
    'uses' => 'Edit\UserEditController@getEditNameForm'
]);

Route::post('edit-name/{id}', [
    'middleware' => 'auth',
    'uses' => 'Edit\UserEditController@editName'
]);

Route::get('/edit-email/{id}', [
    'middleware' => 'auth',
    'uses' => 'Edit\UserEditController@getEditEmailForm'
]);

Route::post('edit-email/{id}', [
    'middleware' => 'auth',
    'uses' => 'Edit\UserEditController@editEmail'
]);


