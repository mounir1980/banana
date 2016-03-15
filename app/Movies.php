<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 08/03/16
 * Time: 11:42
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * @package App
 * Class Movies
 * Modelise toutes mes requêtes concernant la table Movies
 */
class Movies extends Model
{

    /**
     * Nom de ma table
     * @var string
     */
    protected $table = "movies";


    /**
     * Récupérer le nb de films actifs
     * SELECT COUNT( * ) AS nb
     *FROM `movies`
     *WHERE visible =1
     * DB -> constructeur de requête en php
     */
    public function getNbMoviesActifs(){

        $nb = DB::table('movies')
                ->where('visible',1)
                ->count();

        return $nb;

    }


    /**
     * SELECT COUNT( * )
     *FROM `movies`
     */
    public function getTotalMovies()
    {
        $nbTotal = DB::table('movies')
                        ->count();
        return $nbTotal;
    }


    /**
     * SELECT COUNT( * )
     *FROM `comments`
     *WHERE state =1
     */
    public function getNbCommentsActif(){

        $nbComments = DB::table('comments')
                        ->where('state',1)
                        ->count();
        return $nbComments;
    }



    public function getNbTotalComments(){

        $nbTotalComments = DB::table('comments')
                            ->count();

        return $nbTotalComments;

    }

    /**
     * SELECT COUNT(date_session)
     *FROM sessions
     *WHERE date_session > NOW()
     */
    public function getSeanceFutur(){

        $seanceFutur = DB::table('sessions')
                            ->where('date_session', '>=' ,DB::raw('NOW()'))
                            ->count();
        return $seanceFutur;
    }


    public function getNbUserActif(){


    }















}