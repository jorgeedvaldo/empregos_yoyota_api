<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'author' => 'required',
            'email' => 'required|email',
            'content'=> 'required'
        ];
    }

    public function messages()
    {
        return [
            'author.required'    => 'Digite o nome correctamente.',
            'email.required'    => 'Digite um email válido.',
            'email.email'    => 'Digite um email válido.',
            'content.required' => 'Digite uma mensagem válida.'
        ];
    }
}
