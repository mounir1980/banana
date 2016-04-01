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
use Illuminate\Support\Facades\Input;

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
                ->select(DB::raw('count(*)as movies_count'),'distributeur' )
                ->groupBy('distributeur')
                ->get();

        //dump($distributeur);

//        $pDistrib =



        return $distributeur;

    }

    public function searchMovies()
    {
        $query = Input::get('search'); // get permet de recuperer un champs sur son name

        $result = DB::table('movies')

            ->select('movies.title as mtitle',
                'movies.synopsis as msynopsis',
                'movies.description as mdescription',
                'categories.title as ctitle',
                'actors.firstname as afirstname',
                'actors.lastname as alastname',
                'directors.firstname as dfirstname',
                'directors.lastname as dlastname')
            ->join('categories', 'categories.id' , '=' , 'movies.categories_id')
            ->join('actors_movies' , 'movies.id' , '=', 'actors_movies.movies_id')
            ->join('actors' , 'actors.id' , '=' ,'actors_movies.actors_id')
            ->join('directors_movies','directors_movies.movies_id', '=', 'movies.id')
            ->join('directors' , 'directors.id', '=' ,'directors_movies.directors_id')

            ->where('movies.title','LIKE','%'. $query .'%')
            ->orwhere('movies.synopsis','LIKE','%'. $query .'%')
            ->orwhere('movies.description','LIKE','%'. $query .'%')
            ->orwhere('categories.title','LIKE','%'. $query .'%')
            ->orwhere('actors.firstname','LIKE','%'. $query .'%')
            ->orwhere('actors.lastname','LIKE','%'. $query .'%')
            ->orwhere('actors.firstname','LIKE','%'. $query .'%')
            ->orwhere('directors.lastname','LIKE','%'. $query .'%')

            ->groupBy('movies.id')

            ->get();  /// permet de retournet le résulat


        return $result;
    }


}