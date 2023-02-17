<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'titre' => 'required|min: 3',
        ];
    }
    public function messages() {
        return [
           'titre.required' => 'le titre est exigé',
           'titre.min' => 'le titre doit avoir au moin 3 ...',
        //    'email.required' => 'le email est exigé',
        //    'email.email' => 'verifier Email ...'
        ];
    }
}
