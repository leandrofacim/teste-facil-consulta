<?php

namespace Database\Factories;

use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MedicoPacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $medico = Medico::factory()->create();
        $paciente = Paciente::factory()->create();

        return [
            'medico_id' => $medico->id,
            'paciente_id' => $paciente->id
        ];
    }
}
