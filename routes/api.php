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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return "ss";
// });


Route::get('/claims', [
    'uses' => 'MiddleRestController@claims'
]);

Route::get('/demo/execute', [
    'uses' => 'MiddleRestController@execute'
]);

Route::get('/claims/details', [
    'uses' => 'MiddleRestController@details'
]);

Route::get('/claims/detail/{claimno}', [
    'uses' => 'MiddleRestController@detail'
]);


Route::get('/claims/simulate', [
    'uses' => 'MiddleRestController@simulate'
]);

Route::get('/claims/approve', [
    'uses' => 'MiddleRestController@approve'
]);

Route::get('/reports', [
    'uses' => 'MiddleRestController@reports'
]);

Route::get('/list_reports', [
    'uses' => 'MiddleRestController@list_reports'
]);


Route::get('/reports/schedule/{reportName}', [
    'uses' => 'MiddleRestController@schelule_report'
]);


Route::get('/reports/detail/{pki}', [
    'uses' => 'MiddleRestController@reports_details'
]);
