<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 17/03/16
 * Time: 12:02
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Medias extends Model
{

    protected $table = "medias";

    public function getNbMedias(){

        $nbMedias = DB::table('medias')
                        ->count();

        return $nbMedias;
    }
}