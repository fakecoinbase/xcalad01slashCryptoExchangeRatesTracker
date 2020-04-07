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

Route::get('ping', 'ApiController@ping');

Route::post('exchange', 'ApiController@create_exchange');

Route::post('crypto_historical', 'ApiController@crypto_add_historical');

Route::get('crypto_historical/value/{start}/{end}/{exchange}/{range}/{from}/{to}', 'ApiController@get_crypto_value_time_range');

Route::get('crypto_historical/ohlc/{start}/{end}/{exchange}/{range}/{from}/{to}', 'ApiController@get_crypto_ohlc_time_range');

Route::get('crypto_historical/volume/{start}/{end}/{exchange}/{range}/{from}/{to}', 'ApiController@get_crypto_volume_time_range');

Route::get('crypto_current/{timestamp}/{exchange}/{from}/{to}/{init}', 'ApiController@get_crypto_value_timestamp');

Route::post('update_crypto_pair_value', 'ApiController@update_crypto_pair_value');

Route::post('crypto', 'ApiController@create_crypto');

Route::post('fiat', 'ApiController@create_fiat');

Route::get('fiat/historical/{timestamp}/{fiat}/{old_fiat?}', 'ApiController@fiat_historical');

Route::get('all_hist_avail/{exchange}', 'ApiController@get_all_hist_avail');


//Route::post('fiat_fix', 'ApiController@fix_fiat_timestamp');
