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
        return $this->hasMany(Task::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    
}
