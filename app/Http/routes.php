<?php



Route::group(['prefix' => 'api/v1'], function () {
    Route::get('/search_hotels/{name?}/{city?}/{price?}/{date?}', 'ApiController@search_hotels');
});

Route::get('api-docs', 'DocsController@index');
