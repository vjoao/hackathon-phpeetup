<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Organisation;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $id = Organisation::first()->id;

        Task::create([
            'name' => 'Tarefa voluntária',
            'description' => 'Uma tafera voluntária',
            'limit' => 3,
            'organisation_id' => $id
        ]);

        Task::create([
            'name' => 'Tarefa voluntária 2',
            'description' => 'Uma tafera voluntária',
            'limit' => 3,
            'organisation_id' => $id+1
        ]);

        Task::create([
            'name' => 'Tarefa voluntária 3',
            'description' => 'Uma tafera voluntária',
            'limit' => 1,
            'organisation_id' => $id
        ]);

        Task::create([
            'name' => 'Tarefa voluntária 4',
            'description' => 'Uma tafera voluntária',
            'limit' => 2,
            'organisation_id' => $id+2
        ]);
    }
}
