<?php


namespace App\Http\Controllers;

use App\Http\Requests\MoviesRequest;
use App\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/**
 * Class MoviesController
 * @package App\Http\Controllers
 * ma class MoviesController hérite de controller
 * chaque controller doit-être sufixé
 * par le mot clef Controller et doit
 * hériter de ma classe Controller
 */
class MoviesController extends Controller {

    /**
     *  Methode de controller
     * <=> Action de controller
     */
    public function lister (){

        $movies = Movies::all();

        //dump($movies);
        // Retourner une vue
        return view("movies/list", [
            //Je transporte mes films pour ma vue
            'movies' => $movies

//SALUT GITHUB
        ]);
    }

    public function creer (){

        return view("movies/creer");
    }

    /**
     * Argument d'action de Controller
     * sont égaux aux arguments de l'URI
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editer ($id){

        // Deboger mon id
        //
        //dump($id);
        //Le transporteur transporte mes données à la vue
        return view("movies/editer", [
            'id' => $id
        ]);
    }

    public function voir ($id){

        //Find permet de retrouver
        //1 objet par son ID
        $movie = Movies::find($id);

        return view("movies/voir", [
            'id' => $id,
            'movie' => $movie,

        ]);
    }


    public function enregistrer(MoviesRequest $request){


        // Récupération des données
        $title = $request->title;
        $description = $request->description;
        $synopsis = $request->synopsis;
        $budget = $request->budget;
        $annee = $request->annee;
        $date_release = $request->date_release;
        $bo = $request->bo;
        $visible = $request->visible;
        $cover = $request->cover;

        $movie = new Movies();
        $movie->title = $title;
        $movie->description = $description;
        $movie->synopsis = $synopsis;
        $movie->budget = $budget;
        $movie->annee = $annee;
        $movie->date_release = $date_release;
        $movie->bo = $bo;
        $movie->visible = $visible;
        $movie->cover = $cover;
        $movie->save();
        return Redirect::route('movies_lister');
    }



    public function visible($id){

        $movie = Movies::find($id);
        $movie->visible = 1;
        $movie->save();

        return Redirect::route('movies_lister');

    }


    public function invisible($id){

        $movie = Movies::find($id);
        $movie->visible = 0;//$movie->visible = !$movie->visible;
        $movie->save();

        return Redirect::route('movies_lister');
    }


    public function cover($id){

        $movie = Movies::find($id);

        if($movie->cover == 0){

            $movie->cover = 1;
        }

        $movie->cover = 0;


        $movie->save();

        return Redirect::route('movies_lister');
    }










}