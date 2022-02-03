<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'name' => 'required',
            'desc' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'qtd' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Insira o nome do produto!',
            'desc.required' => 'Insira uma descrição!',
            'category.required' => 'Selecione uma categoria Valida!',
            'price.required' => 'Digite um valor para o preço!',
            'price.numeric' => 'Insira um valor valido!',
            'qtd.required' => 'Insira a quantidade de produtos!',
            'price.numeric' => 'Insira uma quantidade valida!',
        ];
    }
}
