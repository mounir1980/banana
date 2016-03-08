<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 08/03/16
 * Time: 10:09
 */

namespace App\Http\Controllers;


use App\Categories;

class CategoriesController extends Controller
{
    /**
     *  Methode de controller
     * <=> Action de controller
     */
    public function lister (){

        $categories = Categories::all();
        dump($categories);
        // Retourner une vue
        return view("categories/list", [

            "categories" => $categories
        ]);
    }

    public function creer (){

        return view("categories/creer");
    }

    public function editer ($id){

        return view("categories/editer", [

            'id' => $id
        ]);
    }


    public function voir ($id){

        //Find permet de retrouver
        //1 objet par son ID
        $category = Categories::find($id);
        return view("categories/voir", [
            'id' => $id,
            'category' => $category
        ]);
    }

}