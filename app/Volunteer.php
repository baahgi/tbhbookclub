<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $guarded = [];

    public function references()
    {
        return $this->hasMany(VolunteerReference::class);
    }
}
