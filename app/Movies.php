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
     * SELECT SUM(budget)
     *FROM movies
     */
    public function getBudgetTotal(){

        $budgetTotal = DB::table('movies')
                    ->sum('budget');

        return $budgetTotal;
    }


    public function getDureeMoy(){

        $dureeMoy = DB::table('movies')
                    ->avg('duree');
        return round($dureeMoy);
    }

    public function getMoyNote(){

        $moyNote = DB::table('movies')
                    ->avg('note_presse');

        return $moyNote;
    }

    public function getTitleMovies(){

        $titleMovies = DB::table('movies')
                    ->select('movies.title AS titleM')
                    ->get();

        return $titleMovies;
    }

    public function getDistributeur(){

        $distributeur = DB::table('movies')
                ->select(DB::raw('count(*)as movies_count,distributeur') )
                ->groupBy('distributeur')
                ->get();

        return $distributeur;

    }


}