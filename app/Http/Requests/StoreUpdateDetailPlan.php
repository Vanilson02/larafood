<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateDetailPlan extends FormRequest
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
            'name' => 'required|min:3|max:255|unique:details_plan,name',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Informe o nome do Detalhe !!',
            'name.min' => 'Nome do Detalhe deve conter mais que 2 caracteres !!',
            'name.max' => 'Nome do Detalhe deve conter no maximo 255 caracteres !!',
            'name.unique' => 'Já existe registro desse detalhe !!',           
        ];
    }
}
