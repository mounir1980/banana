<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 15/03/16
 * Time: 14:25
 */

namespace App\Http\Controllers;
use App\Movies;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function homepage(){

        $movie = new Movies();
        $nb = $movie->getNbMoviesActifs();
        $nbTotal = $movie->getTotalMovies();
        $nbCommentsActif = $movie->getNbCommentsActif();
        $nbTotalcomments = $movie->getNbTotalComments();
        $seanceFutur = $movie->getSeanceFutur();

        return view('statique/welcome',[

            'nb' => $nb,
            'nbTotal' => $nbTotal,
            'nbCommentsActif' => $nbCommentsActif,
            'nbTotalComments' => $nbTotalcomments,
            'seanceFutur' => $seanceFutur
        ]);
    }
}