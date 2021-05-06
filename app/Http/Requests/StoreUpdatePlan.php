<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePlan extends FormRequest
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
        $url = $this->segment(3);
        
        return [
            'name' => "required|min:3|max:255|unique:plans,name,{$url},url",
            'description' => 'nullable|min:3|max:255',
            'price' => "required|regex:/^\d+(\.\d{1,2})?$/",
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Informe o nome do Plano !!',
            'name.min' => 'Nome do Plano deve conter mais que 2 caracteres !!',
            'name.max' => 'Nome do Plano deve conter no maximo 255 caracteres !!',
            'description.min' => 'Descrição deve conter mais que 2 caracteres !!',
            'description.max' => 'Descrição deve conter no maximo 255 caracteres !!',
            'price.required' => 'Informe o valor do Plano !!',
            'price.regex' => 'Formato de preço inválido !!',
            'name.unique' => 'Já existe registro desse Plano !!',
        ];
    }
}
