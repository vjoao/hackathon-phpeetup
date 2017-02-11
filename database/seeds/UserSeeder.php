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
            'fullname' => 'Usuário de teste',
            'email' => 'test@test.com',
            'password' => bcrypt('123456')
        ]);
    }
}
