<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Employee::factory(10)->create()->each(function ($employee){
            Material::factory(rand(1,4))->create([
                'employee_id' => $employee->id,
            ]);
        });

    }
}
