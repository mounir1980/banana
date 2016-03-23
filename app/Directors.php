<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 08/03/16
 * Time: 14:19
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Directors extends Model
{
    protected $table = "directors";


    public function getNbDirectors(){


        $nbDirectors = DB::table('directors')
                        ->count();

        return $nbDirectors;
}



}