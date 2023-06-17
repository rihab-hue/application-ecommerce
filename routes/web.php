<?php
//front
Route::view('/','front.index')->name('index');
Route::view('/contact','front.contact')->name('contact');

Route::get('/Article', 'ArticlesController@index')->name('article');
Route::get('/Article/{id}', 'ArticlesController@details')->name('article_detail');
Route::post('/add-to-cart/{id}', 'CartController@addToCart')->name('add-to-cart');
Route::delete('remove-from-cart', 'CartController@remove');
Route::get('/cart', 'CartController@index')->name('cart');

Auth::routes(['register' =>true]);


    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');
    Route::resource('products', 'ProductsController');

    Route::delete('formats/destroy', 'formatsController@massDestroy')->name('formats.massDestroy');
    Route::resource('formats', 'formatsController');

    Route::delete('papiers/destroy', 'papiersController@massDestroy')->name('papiers.massDestroy');
    Route::resource('papiers', 'papiersController');

    Route::delete('impressions/destroy', 'impressionsController@massDestroy')->name('impressions.massDestroy');
    Route::resource('impressions', 'impressionsController');

    Route::delete('pelliculages/destroy', 'pelliculagesController@massDestroy')->name('pelliculages.massDestroy');
    Route::resource('pelliculages', 'pelliculagesController');

    Route::delete('nbr_couleurs/destroy', 'nbr_couleursController@massDestroy')->name('nbr_couleurs.massDestroy');
    Route::resource('nbr_couleurs', 'nbr_couleursController');

    Route::delete('nbr_exemplaires/destroy', 'nbr_exemplairesController@massDestroy')->name('nbr_exemplaires.massDestroy');
    Route::resource('nbr_exemplaires', 'nbr_exemplairesController');

    Route::delete('articles/destroy', 'ArticlesController@massDestroy')->name('articles.massDestroy');
    Route::resource('articles', 'ArticlesController');

    Route::delete('commandes/destroy', 'CommandesController@massDestroy')->name('commandes.massDestroy');
    Route::resource('commandes', 'CommandesController');

    Route::delete('contacts/destroy', 'ContactsController@massDestroy')->name('contacts.massDestroy');
    Route::resource('contacts', 'ContactsController');
});

