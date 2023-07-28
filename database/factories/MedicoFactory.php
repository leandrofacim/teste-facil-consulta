<?php

namespace Database\Factories;

use App\Models\Cidade;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medico>
 */
class MedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'especialidade' => $this->faker->word(),
            'cidade_id' => function () {
                return Cidade::factory()->create()->id;
            },
            'user_id' => function () {
                return User::factory()->create()->id;
            }
        ];
    }
}
