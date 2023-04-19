<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'=>'required',
            'data_nasc'=>'required|numeric',
            'cpf'=>'required|numeric',
            'foto'=>'required',
            'nome_social'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Coloque o Nome do cliente!',
            'data_nasc.numeric'  => 'Coloque a data de nascimento.',
            'cpf.numeric'  => 'Coloque o cpf.',
            'foto.required' => 'Coloque a imagem do cliente!',
            'nome_social.required' => 'Coloque o Nome Social do cliente!',
        ];
    }
}