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
            'name' => 'Melhorar a internet',
            'description' => 'O Hackathon precisa de uma internet boa!',
            'limit' => 3,
            'place' => 'Auditório da FTC',
            'organisation_id' => $id
        ]);

        Task::create([
            'name' => 'Distribuição de alimentos',
            'description' => 'Distribuir os alimentos arrecadados no PHPeetup',
            'limit' => 3,
            'place' => 'Intituições de caridade',
            'organisation_id' => $id
        ]);

        Task::create([
            'name' => 'Premiar o PossoAjudar',
            'description' => 'Merecemos o prêmio de melhor projeto do Hackathon',
            'limit' => 1,
            'place' => 'Auditório da FTC',
            'organisation_id' => $id
        ]);

        Task::create([
            'name' => 'Guardar os materiais do evento',
            'description' => 'Ajude os organizadores a guardar os materiais do evento',
            'limit' => 2,
            'place' => 'Auditório da FTC',
            'organisation_id' => $id
        ]);
    }
}
