<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 30/03/16
 * Time: 11:31
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    public function rules(){

        return [

            'nom' => 'required|min:5|regex:/^[a-zA-Z- ]+$/',
            'email' => 'required|email',
            'message' => 'required|min:10'

        ];

    }


    public function message(){

        return [

            'nom.required' => 'Nom obligatoire',
            'nom.min' => 'Votre nom est trop court',
            'nom.regex' => 'Votre nom est invalide',
            'email.required' => 'Email obligatoire',
            'email.email' => 'Format incorrect',
            'message.required' => 'Message obligatoire',
            'message.min' => 'Message trop court'

        ];

    }
    public function authorize(){

        return true;
    }



}