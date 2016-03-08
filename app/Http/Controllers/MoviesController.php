<?php


namespace App\Http\Controllers;
use App\Movies;

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

        dump($movies);
        // Retourner une vue
        return view("movies/list", [
            //Je transporte mes films pour ma vue
            'movies' => $movies

//SALUT GITHUB
        ]);
    }

    public function creer (){

        return view("movies/creer",[

            
        ]);
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
}