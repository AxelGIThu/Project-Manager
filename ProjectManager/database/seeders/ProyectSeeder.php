<?php

namespace Database\Seeders;

use App\Models\Proyect;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProyectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proyect = new Proyect();
        $proyect->Name = 'Example-Project';
        $proyect->Description = 'Example description: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae fuga eos explicabo maiores reprehenderit nobis adipisci asperiores, provident, accusamus optio eveniet ex minima fugiat odio obcaecati hic alias nesciunt quos.';
        $proyect->save();
    }
}
