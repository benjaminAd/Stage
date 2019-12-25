<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetStore extends FormRequest
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
            // 'id_projet' => 'required|',
            'titre_projet' => ['required','unique:Projet'],
            'desc_projet' => ['required'],
            'date_butoir_projet' => ['required'],
            'date_debut' => ['required'],
            'URL_PJ' => ['required'],
            'Budget_min_projet' => ['required','integer'],
            'Budget_max_projet' => ['required','integer'],
            'nd_realisateurs' => ['required'],
            'stage' => ['required'],
            
        ];
    }
}
