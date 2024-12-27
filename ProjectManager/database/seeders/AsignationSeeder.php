<?php

namespace Database\Seeders;

use App\Models\Asignation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $asignation = new Asignation();
        $asignation->task_id = 1;
        $asignation->user_id = 1;
        $asignation->save();
        $asignation = new Asignation();
        $asignation->task_id = 2;
        $asignation->user_id = 1;
        $asignation->save();
        $asignation = new Asignation();
        $asignation->task_id = 3;
        $asignation->user_id = 1;
        $asignation->save();
    }
}
