<?php

use App\Http\Controllers\DynamicToken;
use Illuminate\Support\Facades\Route;
use Statamic\Facades\Site;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;

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

/*
Route::get('/', function () {
    return view('home');
});
*/
Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index');
});
Route::controller(ContactController::class)->group(function () {
    Route::post('/mailform', 'postContact');
});
/*
Route::controller(UsersController::class)->group(function(){
    Route::get('users/','show');
});
*/
