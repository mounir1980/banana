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


Route::get('/', [

    'as' => 'homepage',
    'uses' => 'HomeController@homepage'
]);


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


Route::get('vider',[

    'as' =>'movies_vider',
    'uses' => 'MoviesController@vider'
]);
/**
 * uses: permettant d'appeler un controller
 * Nom du controller @ Action du controller
 */
Route::post('enregistrer',[

    'as' => 'movies_enregistrer',
    'uses' => 'MoviesController@enregistrer'
]);

Route::get('/panier/{id}',[

    'as' => 'movies_panier',
    'uses' => 'MoviesController@panier'

]);

Route::get('/visible/{id}',[

    'as' => 'movies_visible',
    'uses' => 'MoviesController@visible'
]);
// Pas necessaire
Route::get('/invisible/{id}',[

    'as' => 'movies_invisible',
    'uses' => 'MoviesController@invisible'
]);

Route::get('/cover/{id}',[

    'as'=> 'movies_cover',
    'uses' => 'MoviesController@cover'
]);

Route::get('/lister', [

    'as' => 'movies_lister',
    'uses' => 'MoviesController@lister'
]);


    Route::get('/supprimer/{id}',[

        'as' => 'movies_supprimer',
        'uses' => 'MoviesController@supprimer'
    ]);


Route::get('/creer', [

    'as' => 'movies_creer',
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

        'as'=> 'categories_lister',
        'uses' => 'CategoriesController@lister'
    ]);

    Route::get('/creer', [

        'as' => 'categories_creer',
        'uses' => 'CategoriesController@creer'
    ]);

    Route::get('/supprimer/{id}',[

        'as' => 'categories_supprimer',
        'uses' => 'CategoriesController@supprimer'
    ]);

    Route::post('enregistrer',[

        'as' => 'categories_enregistrer',
        'uses' => 'CategoriesController@enregistrer'
    ]);

    Route::get('/editer/{id}', [

        'uses' => 'CategoriesController@editer'
    ])
        ->where('id', '[0-9]+');

    Route::get('/voir/{id}', [

        'as' => 'categories_voir',
        'uses' => 'CategoriesController@voir'
    ])
        ->where('id', '[0-9]+');

});





Route::group(array('prefix'=> 'actors'),function() {


    Route::get('vider',[

        'as' =>'actors_vider',
        'uses' => 'ActorsController@vider'
    ]);



    Route::get('/panier/{id}',[

        'as' => 'actors_panier',
        'uses' => 'ActorsController@panier'

    ]);


    /**
     * uses: permettant d'appeler un controller
     * Nom du controller @ Action du controller
     */
    Route::get('/lister', [

        'as' => 'actors_lister',
        'uses' => 'ActorsController@lister'
    ]);

    Route::post('/enregistrer',[

        'as' => 'actors_enregistrer',
        'uses' => 'ActorsController@enregistrer'
    ]);

    Route::get('/creer', [

        'as' => 'actors_creer',
        'uses' => 'ActorsController@creer'
    ]);
    Route::get('/editer/{id}', [

        'uses' => 'ActorsController@editer'
    ])
        ->where('id', '[0-9]+');

    Route::get('/voir/{id}', [

        'as' => "actors_voir",
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

        'as' => 'directors_lister',
        'uses' => 'DirectorsController@lister'
    ]);

    Route::post('/enregistrer',[

        'as'=> 'directors_enregistrer',
        'uses' => 'DirectorsController@enregistrer'
    ]);

    Route::get('/creer', [

        'uses' => 'DirectorsController@creer'
    ]);
    Route::get('/editer/{id}', [

        'uses' => 'DirectorsController@editer'
    ])
        ->where('id', '[0-9]+');

    Route::get('/voir/{id}', [

        'as' => 'directors_voir',
        'uses' => 'DirectorsController@voir'
    ])
        ->where('id', '[0-9]+');


});

    //
});
