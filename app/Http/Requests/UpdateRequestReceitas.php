<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequestReceitas extends FormRequest
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
            'nome' => 'required|min:3|max:20|',
            'descricao' => 'required',
            'preparo' => 'nullable',
            'id_categoria' => 'required|exists:category_wines,id'
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'Nome obrigatório!',
            'descricao.required' => 'Descrição obrigatória'
        ];
    }
}
