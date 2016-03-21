<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 08/03/16
 * Time: 10:11
 */

namespace App\Http\Controllers;


use App\Actors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ActorsController extends Controller
{
    /**
     *  Methode de controller
     * <=> Action de controller
     */
    public function lister (Request $request){

        $actors = Actors::all();

        $id_actors = $request->session()->get('id_actors', []);
        //dump($id_actors);
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

        $actors = Actors::find($id);

        return view("actors/voir", [

            "actors" => $actors
        ]);
    }

    public function enregister(ActorsRequest $request){

        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $biography = $request->biography;
        $city =$request->city;

        $actor = new Actors();

        if($request->hasFile('image')){

            $filename = $file->getClientOriginName();

            $destinationPath = public_path().'/uploads/actors';

            $file->move($destinationPath,$filename);

            $actor->image = asset('uploads/actors'.$filename);




    }

    public function panier(Request $request,$id){

        $actors = Actors::find($id);

        // 1. Enregistrer en session l'ID
        // La requête(request) fais appel à la session
        // put() permet d'enregistrer en session
        // à base d'une clef: 'id_actors'
        // et d'une valeur: $id

        // get() je récupère en session mon tableau
        // par sa clef 'id_actors'
        // si mon tableau n'existe pas en session
        // j'initialise un tableau vide
        $tab =$request->session()->get('id_actors',[]);

        if(array_key_exists($id,$tab)){

            unset($tab[$id]);// Supprime mon élément de tableau

        } else {

            $tab[$id] = $actors->lastname;// ajouter mon id dans mon tableau

        }


        // Ajouté un id dans mon tableau d'acteurs
        $request->session()->put('id_actors',$tab);


        //2. rediriger vers la liste d'acteurs
        return redirect::route('actors_lister');


    }


    public function vider(Request $request){

        $request->session()->forget('id_actors');

        return redirect::route('actors_lister');

    }


}