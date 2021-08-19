<?php

Route::get('/', 'Front\ProductController@index');

// // Authentication
// Route::group(['namespace' => 'Auth', 'prefix' => 'admin'], function()
// {
//     Route::get('login', 'LoginController@showLoginForm')->name('login');
//     Route::post('login', 'LoginController@login');
//     Route::get('logout', 'LoginController@logout')->name('logout');
// });
// //----------
//
// // Admin
// Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function()
// {
//     Route::redirect('/', '/admin/login');
//
//     //sliders
//     Route::resource('sliders', 'SliderController', ['only' => ['edit', 'update']]);
//
//     //categorias
//     Route::get('categories/json', 'CategoryController@json');
//     Route::resource('categories', 'CategoryController');
//
//     //productos
//     Route::get('products/json', 'ProductController@json');
//     Route::resource('products', 'ProductController');
//
//     //about
//     Route::resource('abouts', 'AboutController')->only('show', 'edit', 'update');
//
//     //brands
//     Route::get('brands', 'BrandController@edit');
//     Route::post('brands', 'BrandController@update');
//
//     //services
//     Route::get('services/json', 'ServiceController@json');
//     Route::resource('services', 'ServiceController');
//
//     //manejo de imagenes
//     Route::patch('images/{image}', 'ImageController@update');
//     Route::post('images/upload', 'ImageController@upload');
//     Route::post('images/{image}/delete', 'ImageController@destroy');
//
//     //orden
//     Route::post('sort/{table}', 'SortController');
// });
//----------

//Front
Route::group(['namespace' => 'Front'], function()
{


    //Contacto
    Route::post('contacto', 'ContactController@send');

});
