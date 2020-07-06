<?php



Route::group(['prefix' => 'admin','namespace'=>'Admin'], function () {
    Route::get('/','DashboardController@getDashboard');
});
