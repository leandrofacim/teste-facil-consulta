<?php

namespace App\Http\Services;

use App\Http\Repositories\MedicoRepository;
use App\Models\Medico;
use App\Models\Paciente;

class VincularPacienteMedico
{
    private MedicoRepository $medicoRepository;
    public function __construct(MedicoRepository $medicoRepository)
    {
        $this->medicoRepository = $medicoRepository;
    }

    public function execute(array $payload)
    {
        $patient = Paciente::find($payload['paciente_id']);
        $medico = Medico::find($payload['medico_id']);

        $this->medicoRepository->vinculaPaciente($patient->id, $medico->id);

        return [
            'paciente' => $patient,
            'medico' => $medico
        ];
    }
}
