<?php

Route::get('/example1', 'Rupokify\SSLCommerz\Http\Controllers\SSLCommerzPaymentController@exampleEasyCheckout');
Route::get('/example2', 'Rupokify\SSLCommerz\Http\Controllers\SSLCommerzPaymentController@exampleHostedCheckout');

Route::post('/pay', 'Rupokify\SSLCommerz\Http\Controllers\SSLCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'Rupokify\SSLCommerz\Http\Controllers\SSLCommerzPaymentController@payViaAjax');

Route::post('/success', 'Rupokify\SSLCommerz\Http\Controllers\SSLCommerzPaymentController@success');
Route::post('/fail', 'Rupokify\SSLCommerz\Http\Controllers\SSLCommerzPaymentController@fail');
Route::post('/cancel', 'Rupokify\SSLCommerz\Http\Controllers\SSLCommerzPaymentController@cancel');

Route::post('/ipn', 'Rupokify\SSLCommerz\Http\Controllers\SSLCommerzPaymentController@ipn');

Route::get('/dump', 'Rupokify\SSLCommerz\Http\Controllers\SSLCommerzPaymentController@dump');