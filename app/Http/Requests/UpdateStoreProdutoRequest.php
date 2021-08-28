<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoreProdutoRequest extends FormRequest
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
            'nome' => 'required|min:3|max:40',
            'descricao' => 'required|min:3|max:2000',
            'peso' => 'required|integer',
            'unidade_id' => 'exists:unidades,id'
        ];

    }

    public function messages()
    {
        return  [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve conter no máximo 30 caracteres',
            'descricao.min' => 'O campo descrição deve conter no mínimo 3 caracteres',
            'descricao.max' => 'O campo descrição deve conter no máximo 2000 caracteres',
            'peso.integer' => 'O campo peso deve conter um número inteiro',
            'unidade_id.exists' => 'A medida de unidade informada não existe'
        ];
    }
}
