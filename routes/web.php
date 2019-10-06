<?php

    Route::get('/', 'ArticleController@index');
    Route::match(['get', 'post'], 'create', 'ArticleController@create');
    Route::match(['get', 'put'], 'update/{id}', 'ArticleController@update');
    Route::match('get', 'details/{id}', 'ArticleController@details');
    Route::delete('delete/{id}', 'ArticleController@delete');
