<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $fillable = [
        'name',
        'address',
        'contact_person',
        'phone',
        'city',
        'website'
    ];


    public function tasks()
    {
        # code...
    }
}
