<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Material>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "numParc" => $this->faker->name(),
            // "type" => $this->faker->text(),
            "marque" => $this->faker->text(),
            "modele" => $this->faker->text(),
            "immatriculation" => $this->faker->text(),
            "numChassis" => $this->faker->text(),
            "dateAquisition" => $this->faker->date(),
        ];
    }
}
