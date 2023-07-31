<?php

namespace App\Http\Controllers;

use App\Http\Repositories\PacienteRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PacienteController extends Controller
{
    private PacienteRepository $pacienteRepository;

    public function __construct(PacienteRepository $pacienteRepository)
    {
        $this->pacienteRepository = $pacienteRepository;
    }

    public function store(Request $request)
    {
        $this->validator($request->all());

        return $this->pacienteRepository->store($request->all());
    }

    public function update(Request $request, int $id)
    {
        return $this->pacienteRepository->update($id, $request->all());
    }

    public function pacientePorMedico(int $medicoId, PacienteRepository $pacienteRepository)
    {
        return $pacienteRepository->pacientePorMedico($medicoId);
    }

    private function validator(array $data)
    {
        return Validator::make($data,
        [
            'nome' => 'required|max:100',
            'cpf' => 'required|cpf|max:14',
            'celular' => 'required',
        ],
        [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.max' => 'O campo nome deve ter no máximo 100 caracteres',
            'cpf.required' => 'O campo cpf é obrigatório',
            'cpf.max' => 'O campo cpf deve ter no máximo 14 caracteres',
            'cpf.cpf' => 'O campo cpf não é válido',
            'celular.required' => 'O campo celular é obrigatório',
        ]
        )->validate();
    }
}
