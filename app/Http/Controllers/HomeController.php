<?php

namespace App\Http\Controllers;

use App\Movies;
use App\Actors;
use App\Categories;
use App\Comments;
use App\Directors;
use App\Medias;
use App\Sessions;
use App\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function modifier(){


    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function moncompte (){

        return view('statique/moncompte');
    }

    public function recherche(Request $request){

        $recherche = Request::input('search');


    }

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
        $titleMovies = $movie->getTitleMovies();
        $distributeur = $movie->getDistributeur();

        $comment = new Comments();
        $nbCommentsActif = $comment->getNbCommentsActif();
        $nbTotalComments = $comment->getNbTotalComments();
        $lastComment = $comment->getLastComment();

        $session = new Sessions();
        $seanceFutur = $session->getSeanceFutur();
        $sessionCinema = $session->getSessionCinema();
        $nbSessions = $session->getNbSessions();

        $user = new User();
        $nbUserActif = $user->getNbUserActif();
        $lastUser = $user->getLastUser();

        $actor = new Actors();
        $ageMoyenActeur = $actor->getAgeMoyenActeur();
        $nbActors = $actor->getNbActors();

        $category = new Categories();
        $nbCategories = $category->getNbCategories();

        $director = new Directors();
        $nbDirectors = $director->getNbDirectors();

        $media = new Medias();
        $nbMedias = $media->getNbMedias();

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
            'lastUser' => $lastUser,
            'sessionCinema' => $sessionCinema,
            'titlemovies' => $titleMovies,
            'nbCategories' => $nbCategories,
            'nbActors' => $nbActors,
            'nbDirectors' => $nbDirectors,
            'nbSessions' => $nbSessions,
            'nbMedias' => $nbMedias,
            'lastComment' => $lastComment,
            'distributeur' => $distributeur
        ]);
    }

}