<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 08/03/16
 * Time: 14:01
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Actors extends Model
{
    protected $table = "actors";




    /**
     * SELECT ROUND(AVG(TIMESTAMPDIFF(YEAR,dob,NOW())))
     *FROM `actors`
     */
    public function getAgeMoyenActeur(){

        $ageMoyenActeur = DB::table('actors')
            ->AVG(DB::raw('(TIMESTAMPDIFF(YEAR,dob,NOW()))'));


        return round($ageMoyenActeur);
    }

    public function getNbActors(){

        $nbActors = DB::table('actors')
                    ->count();

        return $nbActors;
    }


}