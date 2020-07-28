<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function videos()
    {
        return $this->hasMany(video::class);
    }

    public function tutor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subscribedUsers()
    {
        return $this->belongsToMany(User::class);
    }


}
