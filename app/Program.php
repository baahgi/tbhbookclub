<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['title', 'slug'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
