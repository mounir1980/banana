<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 15/03/16
 * Time: 14:25
 */

namespace App\Http\Controllers;
use App\Actors;
use App\Comments;
use App\Movies;
use App\Sessions;
use App\User;

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
                $budgetTotal = $movie->getBudgetTotal();
                $dureeMoy = $movie->getDureeMoy();
                $moyNote = $movie->getMoyNote();

        $comment = new Comments();
                $nbCommentsActif = $comment->getNbCommentsActif();
                $nbTotalComments = $comment->getNbTotalComments();

        $session = new Sessions();
                $seanceFutur = $session->getSeanceFutur();

        $user = new User();
                $nbUserActif = $user->getNbUserActif();
                $lastUser = $user->getLastUser();

        $actor = new Actors();
                $ageMoyenActeur = $actor->getAgeMoyenActeur();

        return view('statique/welcome',[

            'nb' => $nb,
            'nbTotal' => $nbTotal,
            'nbCommentsActif' => $nbCommentsActif,
            'nbTotalComments' => $nbTotalComments,
            'seanceFutur' => $seanceFutur,
            'nbUserActif' => $nbUserActif,
            'ageMoyenActeur' => $ageMoyenActeur,
            'budgetTotal' => $budgetTotal,
            'dureeMoy' => $dureeMoy,
            'moyNote' => $moyNote,
            'lastUser' => $lastUser
        ]);
    }
}