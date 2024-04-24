<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Employee;
use App\Models\Material;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Employee::factory(10)->create();
        Material::factory(10)->create();

        Category::factory()->create([
            'name' => 'ENGIN',
        ]);

        Category::factory()->create([
            'name' => 'CAMION',
        ]);

        Category::factory()->create([
            'name' => 'VEHICULE LEGER',
        ]);

        Employee::factory(10)->create()->each(function ($employee){
            Material::factory()->create([
                'employee_id' => $employee->id,
            ]);
        });

    }
}
