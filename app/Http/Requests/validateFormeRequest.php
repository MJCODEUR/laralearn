<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateFormeRequest extends FormRequest
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
            'nom' => 'required|min: 3',
            'email' => 'required|email'

        ];
    }

    public function messages() {
        return [
           'nom.required' => 'le nom est exigé',
           'nom.min' => 'le nom doit avoir au moin 3 ...',
           'email.required' => 'le email est exigé',
           'email.email' => 'verifier Email ...'
        ];
    }
}
