<?php

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

Route::get('/',[
    'uses' => 'PageController@index',
    'as' => 'pages.index'
]);
Route::get('/About',[
    'uses' => 'PageController@about',
    'as' => 'pages.about'
]);
Route::get('/Gallery',[
    'uses' => 'PageController@gallery',
    'as' => 'pages.gallery'
]);
Route::get('/Contact',[
    'uses' => 'PageController@contact',
    'as' => 'pages.contact'
]);
Route::get('/Store',[
    'uses' => 'ProductController@getStore',
    'as' => 'product.index'
]);



    Route::group(['middleware' => 'auth'], function(){
        Route::get('/profile',[
            'uses'=>'UserController@getProfile',
            'as'=>'users.profile',
            'middleware' => 'auth'
        ]);
        
        Route::get('/logout',[
            'uses'=>'UserController@getLogout',
            'as'=>'users.logout',
            'middleware' => 'auth'
        ]);    
    });


/**Se generan automaticamente las rutas de la autenticacion */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**Ruta para añadir elementos al carro de la compra */
Route::get('/add-to-cart/{id}',[
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/delete-cart-item/{id}',[
    'uses' => 'ProductController@getDeleteItemCart',
    'as' => 'product.deleteItemCart'
]);

Route::get('/delete-cart-all-item/{id}',[
    'uses' => 'ProductController@getDeleteAllItemCart',
    'as' => 'product.deleteAllItemCart'
]);

Route::get('/delete-cart',[
    'uses' => 'ProductController@getDeleteCart',
    'as' => 'product.deleteCart'
]);

Route::get('/shoppingCart',[
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/Store/{id}',[
    'uses' => 'ProductController@getItem',
    'as' => 'product.getItem'
]);

Route::get('/checkout',[
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout'
]);

Route::post('/checkout',[
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout'
]);

Route::get('/shoppingCart',[
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::resource('reviews', 'ReviewController');