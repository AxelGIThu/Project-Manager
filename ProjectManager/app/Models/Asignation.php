<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignation extends Model
{
    protected $fillable = [
        'task_id',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }
}
