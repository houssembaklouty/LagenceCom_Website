<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestContactForm extends FormRequest
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
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50'],
            //'sujet' => ['required', 'string', 'max:50'],
            'message' => ['max:1000'],

           // 'g-recaptcha-response'=>'required|recaptcha'
        ];
    }


    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'g-recaptcha-response.required' => 'S\'il vous plaît assurez-vous que vous êtes un humain.',
            'name.required' => 'Le champ nom et prénom est obligatoire.',
        ];
    }
}