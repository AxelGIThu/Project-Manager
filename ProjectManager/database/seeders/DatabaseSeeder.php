<?php

namespace Database\Seeders;

use App\Models\Asignation;
use App\Models\Proyect;
use App\Models\Technology;
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
        $this->call([
            UserSeeder::class,
            ProyectSeeder::class,
            TechnologySeeder::class,
            TaskSeeder::class,
            AsignationSeeder::class,
        ]);
    }
}
