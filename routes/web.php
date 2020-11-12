<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
/* Laravel V3.5 */
Route::get('/', 'UserController@index');
Route::post('/users', 'UserController@store')->name('users.store');
Route::delete('/users/{user}', 'UserController@destroy')->name('user.destroy');


/* Laravel V8

Route::get('/', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::delete('users/{user}', [UserController::class, 'destroy']);
*/
