<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 10/03/16
 * Time: 16:34
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

/**
 * Classe formulaire hérite de FormRequest
 * Class CategoriesRequest
 * @package App\Http\Requests
 *
 */
class CategoriesRequest extends FormRequest
{

    /**
     * Création de validateurs par champs
     * @return array
     */
    public function rules()
    {

        return [
            //'title' => 'required'|'regex:/^[a-z0-9 ]+$/i',
            //'description' => 'required'|'regex:/^[a-z0-9 ]+$/i',


        ];
    }

    /**
     * Personalise chaque message d'erreur
     * @return array
     */
    public function messages()
    {
        return [
//            'title.required' => 'le titre est obligatoire',
//            'title.regex' => 'Erreur dans le titre',
//            'description.required' => 'La description est obligatoire',
//            'description.regex' => 'Erreur dans la description',



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