<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 08/03/16
 * Time: 10:09
 */

namespace App\Http\Controllers;


use App\Categories;
use App\Http\Requests\CategoriesRequest;
use App\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoriesController extends Controller
{
    /**
     *  Methode de controller
     * <=> Action de controller
     */
    public function lister (){

        $categories = Categories::all();
        //dump($categories);
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

    /**
     * @param CategoriesRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View Enregistrer un film en base de données
     * Enregistrer un film en base de données
     * depuis mes données soumises en formulaire
     */
    public function enregistrer(CategoriesRequest $request){




        // Récupération de données
        $titre = $request->title; // $_POST['title']
        $description = $request->description;
        $slug = $request->slug;
        $file = $request->image;// name de mon input

        $category = new Categories();
        // Enregistrement en base

        // Si ma requete
        // contient un fichier de name "image"
        if($request->hasFile('image')){

            $filename = $file->getClientOriginalName();
            //Recupère le nom original du fichier

            $destinationPath = public_path().'/uploads/categories';
            // Indique ou stocker le fichier

            $file->move($destinationPath, $filename);
            // Déplace le fichier

            $category->image = asset('uploads/categories/'.$filename);
            // image = nom de la colonne en BD

        }


        $category->title = $titre;
        $category->description = $description;
        $category->slug = $slug;



        $category->save();//save permet de sauvegarder mon obj en BDD

        // Redirection a partir de ma route
        return Redirect::route('categories_lister');
    }


    /**
     * @param $id
     * @return mixed
     */
    public function supprimer($id){

        $category = Categories::find($id);
        $category->delete();

        return Redirect::route('categories_lister');
    }
}









































