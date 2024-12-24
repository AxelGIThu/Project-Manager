<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task = new Task();
        $task->proyect_id = 1;
        $task->Name = 'Do an example.';
        $task->Description = 'This is an example';
        $task->Difficulty = 'Low';
        $task->Length = 'Short';
        $task->Done = true;
        $task->save();
    }
}
