<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 08/03/16
 * Time: 10:12
 */

namespace App\Http\Controllers;


use App\Directors;

class DirectorsController extends Controller
{
    /**
     *  Methode de controller
     * <=> Action de controller
     */
    public function lister (){

        $directors = Directors::all();
        dump($directors);
        // Retourner une vue
        return view("directors/list", [

            "directors" => $directors
        ]);
    }

    public function creer (){

        return view("directors/creer");
    }

    public function editer ($id){

        return view("directors/editer");
    }

    public function voir ($id){

        $director = Directors::find($id);
        return view("directors/voir", [

            'director' => $director
        ]);
    }

}