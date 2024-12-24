<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $fillable = [
        'Name',
        'proyect_id',
    ];

    public function proyects()
    {
        return $this->belongsToMany(Proyect::class);
    }
}
