<?php



Route::group(['prefix' => 'admin','namespace'=>'Admin'], function () {
    Route::get('/','DashboardController@getDashboard');
    Route::get('/users','UserController@index')->name('user.index');
    Route::get('/users/{user}/edit','UserController@edit')->name('user.edit');
    Route::delete('/users/{user}','UserController@destroy')->name('user.delete');

    //Module Products
    Route::get('products', 'ProductController@index')->name('product.index');
    Route::get('products/create', 'ProductController@create')->name('product.create');
    Route::post('products/store', 'ProductController@store')->name('product.store');

    //Module Categories
    Route::get('/categories/{module}', 'CategoryController@index')->name('category.index');
    Route::post('categories', 'CategoryController@store')->name('category.store');
    Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('category.edit');
    Route::put('/categories/{category}', 'CategoryController@update')->name('category.update');
    Route::get('/categories/{category}/destroy', 'CategoryController@destroy')->name('category.destroy');
});
