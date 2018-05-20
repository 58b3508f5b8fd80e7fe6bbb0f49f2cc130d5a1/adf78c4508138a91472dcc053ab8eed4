<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('api/jobs/applied','Api\JobController@index');
Route::resource('jobs/applied', 'Api\JobController')
    ->only(['index', 'store', 'show']);

Route::put('signatures/{signature}/report', 'Api\ReportSignature@update');