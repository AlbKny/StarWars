<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

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

Auth::routes();
Route::get('/characters', 'CharacterController@showAll');
Route::get('/fillTable', 'CharacterController@fillTable');
Route::post('/characters/{post}', 'CharacterController@searchCharacter');
