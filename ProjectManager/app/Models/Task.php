<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'proyect_id',
        'Name',
        'Description',
        'Difficulty',
        'Length',
        'Done',
    ];

    public function proyects()
    {
        return $this->belongsTo(Proyect::class);
    }

    public function asignations()
    {
        return $this->hasMany(Asignation::class);
    }
}
