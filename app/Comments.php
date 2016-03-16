<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 16/03/16
 * Time: 11:21
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Comments extends Model
{

    protected $table = "comments";

    /**
     * SELECT COUNT( * )
     *FROM `comments`
     *WHERE state =1
     */
    public function getNbCommentsActif(){

        $nbCommentsActif = DB::table('comments')
            ->where('state',1)
            ->count();
        return $nbCommentsActif;
    }



    public function getNbTotalComments(){

        $nbTotalComments = DB::table('comments')
            ->count();

        return $nbTotalComments;

    }








}