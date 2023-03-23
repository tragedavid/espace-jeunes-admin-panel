<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JeuneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required | max:191',
            'prenom' => 'required | max:191',
            'mail' => 'required | max:191',
            'mdp' => 'required | max:191'
        ];
    }

    public function messages() {
        return [
            'nom.required' => 'Le nom ne doit pas être vide',
            'nom.max' => 'Le nom ne doit pas dépasser 191 caractères',
            'prenom.required' => 'Le prénom ne doit pas être vide',
            'prenom.max' => 'Le prénom ne doit pas dépasser 191 caractères',
            'mail.required' => 'Le mail ne doit pas être vide',
            'mail.max' => 'Le mail ne doit pas dépasser 191 caractères',
            'mdp.required' => 'Le mot de passe ne doit pas être vide',
            'mdp.max' => 'Le mot de passe ne doit pas dépasser 191 caractères'
        ];
    }
}
