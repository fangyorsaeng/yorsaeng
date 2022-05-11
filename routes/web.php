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

Route::get('', function () {
    return view('welcome');
});

Route::get('/yorsaeng/index', 'App\Http\Controllers\FangController@index');
Route::get('/yorsaeng/create', 'App\Http\Controllers\FangController@create');
Route::post('/yorsaeng/store', 'App\Http\Controllers\FangController@store');
Route::post('/yorsaeng/delete/{name}', 'App\Http\Controllers\FangController@delete');
Route::post('/yorsaeng/update/{name}', 'App\Http\Controllers\FangController@update');

Route::get('/branchname', 'App\Http\Controllers\BrnchNameController@create');
Route::get('/usertobranch/select_branch', 'App\Http\Controllers\UsertobranchController@select_branch');
Route::post('/usertobranch/store', 'App\Http\Controllers\UsertobranchController@store');



