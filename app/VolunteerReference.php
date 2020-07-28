<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolunteerReference extends Model
{
    protected $guarded = [];

    public function volunteer()
    {
        return $this->belongsTo(Volunteer::class);
    }
}
