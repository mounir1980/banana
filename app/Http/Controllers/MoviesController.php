<?php


namespace App\Http\Controllers {

    use App\Http\Requests\ContactRequest;
    use App\Http\Requests\MoviesRequest;
    use App\Movies;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Facades\Redirect;

    /**
     * Class MoviesController
     * @package App\Http\Controllers
     * ma class MoviesController hérite de controller
     * chaque controller doit-être sufixé
     * par le mot clef Controller et doit
     * hériter de ma classe Controller
     */
    class MoviesController extends Controller
    {

        /**
         *  Methode de controller
         * <=> Action de controller
         * @param Request $request
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function lister(Request $request)
        {

            $movies = Movies::all();
            //$request->session() acceder à la session
            //get() est une fonction pour récupérer des données
            // à partir de la clef mise en session
            $id_movies = $request->session()->get('id_movies');

            // Retourner une vue
            return view("movies/list", [
                //Je transporte mes films pour ma vue
                'movies' => $movies


            ]);
        }

        public function creer()
        {

            return view("movies/creer");
        }

        /**
         * Argument d'action de Controller
         * sont égaux aux arguments de l'URI
         * @param $id
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function editer($id)
        {

            // Deboger mon id
            //
            //dump($id);
            //Le transporteur transporte mes données à la vue
            return view("movies/editer", [
                'id' => $id
            ]);
        }

        public function voir(Request $request, $id)
        {

            //Find permet de retrouver
            //1 objet par son ID
            $movie = Movies::find($id);

            //$id_movies = $request->session()->get('id_movies');
            //dump($id_movies);
            return view("movies/voir", [
                'id' => $id,
                'movie' => $movie,

            ]);
        }


        public function enregistrer(MoviesRequest $request)
        {


            // Récupération des données
            $title = $request->title;
            $description = $request->description;
            $synopsis = $request->synopsis;
            $budget = $request->budget;
            $annee = $request->annee;
            $date_release = $request->date_release;
            $bo = $request->bo;
            $visible = $request->visible;
            $cover = $request->cover;
            $file = $request->image;

            $movie = new Movies();

            // Si ma requete
            // contient un fichier de name "image"
            if($request->hasFile('image')){

                //Recupère le nom original du fichier
                $filename = $file->getClientOriginalName();

                // Indique ou stocker le fichier
                $destinationPath = public_path().'/uploads/movies';

                $file->move($destinationPath, $filename);
                // Déplace le fichier

                $movie->image = asset('uploads/movies/'.$filename);
                // image = nom de la colonne en BD
            }


            $movie->title = $title;
            $movie->description = $description;
            $movie->synopsis = $synopsis;
            $movie->budget = $budget;
            $movie->annee = $annee;
            $movie->date_release = $date_release;
            $movie->bo = $bo;
            $movie->visible = $visible;
            $movie->cover = $cover;

            $movie->save();


            Mail::send('emails/creer',[
                'title' => $title

            ], function($message) {

                $message->subject('Un nouveau film');
                $message->from('moons@gmail.com');
                $message->to('fafa@gmail.com');
            });


            $lastMovie = DB::table('movies')
                        ->select('id')
                        ->orderBy('id','desc')
                        ->limit(1)
                        ->get();

            return Redirect::route('movies_voir', $lastMovie[0]->id);
        }


        public function visible($id)
        {

            $movie = Movies::find($id);
            $movie->visible = 1;
            $movie->save();

            return Redirect::route('movies_lister');

        }


        public function invisible($id)
        {

            $movie = Movies::find($id);
            $movie->visible = 0;//$movie->visible = !$movie->visible;
            $movie->save();

            return Redirect::route('movies_lister');
        }


        public function cover($id)
        {

            $movie = Movies::find($id);

            if ($movie->cover == 0) {

                $movie->cover = 1;
            }

            $movie->cover = 0;


            $movie->save();

            return Redirect::route('movies_lister');
        }


        /**
         * @param $id
         * @return mixed
         */
        public function supprimer($id)
        {

            $movie = Movies::find($id);
            $movie->delete();

            return Redirect::route('movies_lister');
        }

        public function panier(Request $request, $id)
        {

            $movie = Movies::find($id);

            // 1. Enregistrer en session l'ID
            // La requête(request) fais appel à la session
            // put() permet d'enregistrer en session
            // à base d'une clef: 'id_movies'
            // et d'une valeur: $id

            // get() je récupère en session mon tableau
            // par sa clef 'id_movies'
            // si mon tableau n'existe pas en session
            // j'initialise un tableau vide
            $tab = $request->session()->get('id_movies', []);

            if (array_key_exists($id, $tab)) {

                unset($tab[$id]);// Supprime mon élément de tableau

            } else {

                $tab[$id] = $movie->title;// ajouter mon élément dans mon tableau
            }


            // Ajouté un id dans mon tableau de movies
            $request->session()->put('id_movies', $tab);


            //2. rediriger vers la liste de films
            return redirect::route('movies_lister');
        }


        public function vider(Request $request)

        {


            $request->session()->forget('id_movies');

            return redirect::route('movies_lister');
        }

//        public function submitemail(ContactRequest $request){
//
//            $title = $request->title;
//            $city = $request->city;
//
//
//            Mail::send('emails/contact',[
//                'title' => $title,
//                'city'=> $city
//
//            ], function($message) {
//
//                $message->subject('Un nouveau film');
//                $message->from('moons@gmail.com');
//                $message->to('fafa@gmail.com');
//            });
//
//
//            return Redirect::route('movies_lister');
//
//        }


    }
}
