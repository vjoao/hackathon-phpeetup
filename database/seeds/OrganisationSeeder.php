<?php

use Illuminate\Database\Seeder;
use App\Organisation;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organisation::create([
            'name' => 'Minha primeira ONG',
            'address' => 'Alameda dos Anjos, 12',
            'contact_person' => 'Victor Nascimento',
            'phone' => '99228-6335',
            'city' => 'Feira de Santana',
            'website' => 'http://facebook.com/vmjoao'
        ]);
        Organisation::create([
            'name' => 'Minha segunda ONG',
            'address' => 'Alameda dos Anjos, 123',
            'contact_person' => 'Victor Nascimento',
            'phone' => '99228-6335',
            'city' => 'Feira de Santana',
            'website' => 'http://facebook.com/vmjoao'
        ]);
        Organisation::create([
            'name' => 'Minha terceira ONG',
            'address' => 'Alameda dos Anjos, 1233',
            'contact_person' => 'Victor Nascimento',
            'phone' => '99228-6335',
            'city' => 'Feira de Santana',
            'website' => 'http://facebook.com/vmjoao'
        ]);
        Organisation::create([
            'name' => 'Minha quarta ONG',
            'address' => 'Alameda dos Anjos, 1333',
            'contact_person' => 'Victor Nascimento',
            'phone' => '99228-6335',
            'city' => 'Feira de Santana',
            'website' => 'http://facebook.com/vmjoao'
        ]);
    }
}
