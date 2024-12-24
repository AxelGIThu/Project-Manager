<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    protected $fillable = [
        'Name',
        'Description',
    ];

    public function technologies()
    {
        return $this->hasMany(Technology::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
