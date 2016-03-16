<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 16/03/16
 * Time: 11:52
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Sessions extends Model
{

    protected $table = 'sessions';



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


    /**
     * SELECT movies.title, cinema.title

     *FROM movies

     *INNER JOIN sessions

     *ON movies.id = sessions.movies_id

     *INNER JOIN cinema

     *ON sessions.cinema_id = cinema.id

     *GROUP BY cinema.id

     *ORDER BY date_session ASC
     */
    public function getSessionCinema(){


    }



}