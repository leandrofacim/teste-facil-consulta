<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|min:3|max:100',
            'especialidade' => 'required|string|min:3|max:100',
            'cidade_id' => 'required|integer|exists:cidades,id',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 100 caracteres',
            'especialidade.required' => 'O campo especialidade é obrigatório',
            'especialidade.min' => 'O campo especialidade deve ter no mínimo 3 caracteres',
            'especialidade.max' => 'O campo especialidade deve ter no máximo 100 caracteres',
            'cidade_id.required' => 'O campo cidade é obrigatório',
            'cidade_id.integer' => 'O campo cidade deve ser um número inteiro',
            'cidade_id.exists' => 'O campo cidade não existe',
        ];
    }
}
