<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('statique/welcome');
});


/**
 *  Page contact
 * / contact => URI (bout de l'ul
 */
Route::get('/contact', function (){

    // Retourne la vue contact
    return view('statique/contact');
});

Route::get('/concept', function(){

    return view('statique/concept');
});

Route::get('/propos', function(){

    return view('propos');
});


Route::group(array('prefix'=> 'movies'),function() {

/**
 * uses: permettant d'appeler un controller
 * Nom du controller @ Action du controller
 */
Route::get('/lister', [

    'uses' => 'MoviesController@lister'
]);


Route::get('/creer', [

    'uses' => 'MoviesController@creer'
]);
Route::get('/editer/{id}', [

    'uses' => 'MoviesController@editer'
])
    ->where('id', '[0-9]+');

Route::get('/voir/{id}', [

    'as' => 'movies_voir',
    'uses' => 'MoviesController@voir'
])

    ->where('id', '[0-9]+');

});


Route::group(array('prefix'=> 'categories'),function() {

    /**
     * uses: permettant d'appeler un controller
     * Nom du controller @ Action du controller
     */
    Route::get('/lister', [

        'uses' => 'CategoriesController@lister'
    ]);

    Route::get('/creer', [

        'uses' => 'CategoriesController@creer'
    ]);
    Route::get('/editer/{id}', [

        'uses' => 'CategoriesController@editer'
    ])
        ->where('id', '[0-9]+');

    Route::get('/voir/{id}', [

        'uses' => 'CategoriesController@voir'
    ])
        ->where('id', '[0-9]+');


});


Route::group(array('prefix'=> 'actors'),function() {

    /**
     * uses: permettant d'appeler un controller
     * Nom du controller @ Action du controller
     */
    Route::get('/lister', [

        'uses' => 'ActorsController@lister'
    ]);


    Route::get('/creer', [

        'uses' => 'ActorsController@creer'
    ]);
    Route::get('/editer/{id}', [

        'uses' => 'ActorsController@editer'
    ])
        ->where('id', '[0-9]+');

    Route::get('/voir/{id}', [

        'uses' => 'ActorsController@voir'
    ])
        ->where('id', '[0-9]+');


});


Route::group(array('prefix'=> 'directors'),function() {

    /**
     * uses: permettant d'appeler un controller
     * Nom du controller @ Action du controller
     */
    Route::get('/lister', [

        'uses' => 'DirectorsController@lister'
    ]);


    Route::get('/creer', [

        'uses' => 'DirectorsController@creer'
    ]);
    Route::get('/editer/{id}', [

        'uses' => 'DirectorsController@editer'
    ])
        ->where('id', '[0-9]+');

    Route::get('/voir/{id}', [

        'uses' => 'DirectorsController@voir'
    ])
        ->where('id', '[0-9]+');


});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
