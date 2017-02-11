<?php

use Illuminate\Database\Seeder;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Usuário da Silva',
            'fullname' => 'Usuário de teste',
            'email' => 'test@test.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'Usuário da Silva',
            'fullname' => 'Usuário de teste',
            'email' => 'test1@test.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'Usuário da Silva',
            'fullname' => 'Usuário de teste',
            'email' => 'test2@test.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'Usuário da Silva',
            'fullname' => 'Usuário de teste',
            'email' => 'test3@test.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'Usuário da Silva',
            'fullname' => 'Usuário de teste',
            'email' => 'test4@test.com',
            'password' => bcrypt('123456')
        ]);
    }
}
