<?php

// Change Blade Delimiters
// ~~~~~~~~~~~~~~~~~~~~

// This can be placed anywhere you wish after all the Laravel initializing has completed (for quick and easy configuration, dropping it into the Routes.php file may be simplest)

Blade::setContentTags('<%', '%>'); 		        // for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>'); 	// for escaped data

/**
 * require JavaScript for feeds page
 */
Route::get('/js-is-required', function() {
    return View::make('errors.js-is-required');
});

Route::group(['prefix' => 'api/v1'], function()
{
    Route::get('/show', 'FeedController@index');
    Route::get('/images', 'FeedController@getImageFeed');
});

Route::get('/', [
    'as' => 'home',
    'uses' => 'FeedController@show'
]);
