<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProfile extends FormRequest
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
        $id = $this->segment(3);
        return [
            'name' => "required|min:3|max:255|unique:profiles,name,{$id},id",
            'description' => 'nullable|min:3|max:255',
        ];
    }

    public function messages(){
        return [          
            'name.required' => 'Informe o nome do Perfil !!',
            'name.min' => 'Nome do Perfil deve conter mais que 2 caracteres !!',
            'name.max' => 'Nome do Perfil deve conter no maximo 255 caracteres !!',
            'name.unique' => 'Já existe registro desse Perfil !!',
            'description.min' => 'Descrição deve conter mais que 2 caracteres !!',
            'description.max' => 'Descrição deve conter no maximo 255 caracteres !!',
        ];
    }
}
