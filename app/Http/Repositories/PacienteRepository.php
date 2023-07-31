<?php

namespace App\Http\Repositories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Collection;

class PacienteRepository extends AbstractRepository
{
    protected $model;

    public function __construct(Paciente $pacienteModel)
    {
        $this->model = $pacienteModel;
    }

    public function store(array $data): Paciente
    {
        return $this->model->create([
            'user_id' => auth()->id(),
            ...$data
        ]);
    }

    public function pacientePorMedico(int $medicoId): Collection
    {
        return $this->model
            ->query()
            ->whereHas('medicos', function ($query) use ($medicoId) {
                $query->where('medico_id', $medicoId);
            })
            ->get();
    }
}
