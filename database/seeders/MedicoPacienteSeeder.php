<?php

namespace Database\Seeders;

use App\Models\Medico;
use App\Models\MedicoPaciente;
use App\Models\Paciente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicoPacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicoPaciente::factory(10)
            ->has(Medico::factory()->count(10))
            ->has(Paciente::factory()->count(10))
            ->create();
    }
}
