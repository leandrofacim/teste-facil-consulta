<?php

namespace App\Http\Repositories;

use App\Models\Medico;
use Illuminate\Database\Eloquent\Collection;

class MedicoRepository extends AbstractRepository
{
    protected $model;

    public function __construct(Medico $medicoModel)
    {
        $this->model = $medicoModel;
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function store(array $data): Medico
    {
        return $this->model->create([
            'user_id' => auth()->id(),
            ...$data
        ]);
    }

    public function vinculaPaciente($pacienteId, $medicoId)
    {
        $medico = $this->model->find($medicoId);

        return $medico->pacientes()->attach($pacienteId, [
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    public function listaMedicosPorCidade($idCidade)
    {
        return $this->model->where('cidade_id', $idCidade)->get();
    }
}
