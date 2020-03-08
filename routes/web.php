<?php
/**
 * @copyright by Jonathan Martz
 */

use Illuminate\Support\Facades\Route;

Route::prefix('order')->group(function () {
    Route::get('/view', [
        'middleware' => [],
        'uses' => 'App\Http\Controllers\OrderController@view'
    ]);

    Route::get('/collection', [
        'middleware' => [],
        'uses' => 'App\Http\Controllers\OrderController@collection'
    ]);
});
