<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anomalie>
 */
class AnomalieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "datedebut" => $this->faker->date(),
            "compteurKilometrique" => $this->faker->numerify(),
            "compteurHoraire" => $this->faker->numerify(),
            "file_path" => $this->faker->file(),
            "datefin" => $this->faker->date(),

        ];
    }
}
