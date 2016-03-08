<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 08/03/16
 * Time: 10:11
 */

namespace App\Http\Controllers;


use App\Actors;

class ActorsController extends Controller
{
    /**
     *  Methode de controller
     * <=> Action de controller
     */
    public function lister (){

        $actors = Actors::all();

        dump($actors);
        // Retourner une vue
        return view("actors/list", [

            "actors" => $actors
        ]);
    }

    public function creer (){

        return view("actors/creer");
    }

    public function editer ($id){

        return view("actors/editer");
    }


    public function voir ($id){

        $actor = Actors::find($id);

        return view("actors/voir", [

            "actor" => $actor
        ]);
    }
}