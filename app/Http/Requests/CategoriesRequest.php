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
            'titre' => 'required | min:10',
            'description' => 'required | min:10 | max:250'
        ];
    }

    /**
     * Personalise chaque message d'erreur
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'le titre est obligatoire',
            'description.required' => 'La description est trop longue',
            'title.min' => 'Le titre est trop court',
            'title.max' => 'Le titre est trop long',
            'description.min' => 'La description est trop courte',
            'description.max' => 'La description est trop longue'
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