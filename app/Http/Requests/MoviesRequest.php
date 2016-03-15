<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 11/03/16
 * Time: 11:21
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

/**
 * Classe formulaire hérite de FormRequest
 * Class MoviesRequest
 * @package App\Http\Requests
 */
class MoviesRequest extends FormRequest
{


    /**
     * Création de validateurs par champs
     * @return array
     */
    public function rules()
    {

        return [

            'title' => 'required|min:5|regex:/^[a-z0-9 ]+$/i',
            'description' => 'required|min:15|regex:/^[a-z0-9 ]+$/i',
            'synopsis' => 'required|min:8',
            'budget' => 'required|regex:/^[0-9]+$/',
            'annee' => 'required|date_format:Y',
            'date_release' => 'required|date_format:d/m/Y|after:now',
           // 'bo' => 'required | in:vo,vost,vostfr',
        ];
    }

    /**
     * Personalise chaque message d'erreur
     * @return array
     */
    public function messages()
    {
        return [
            //'titre.required' => 'Le titre est trop long',
            'title.min' => 'Le titre est trop court',
            'title.regex' => 'le titre est obligatoire',
            //'description.required' => 'La description est trop longue',
            'description.min' => 'La description est trop courte',
            'description.regex' => 'champ description incorrect',
            'synopsis.required' => 'champ synopsis obligatoire',
            'synopsis.min' => 'champ synopsis trop court',
            'budget.required' => 'champ budget obligatoire',
            'budget.regex' => 'champ budget incorrect',
            'annee.required' => 'champ annee obligatoire',
            'annee.date_format' => 'champ annee incorrect',
            'date_release.required' => 'champ date de création obligatoire',
            'date_release.date_format' => 'Erreur format année',
            'date_release.after' => 'Date dépassé',
            //'bo.required' => 'champ bo obligatoire',
        ];
    }


    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

}