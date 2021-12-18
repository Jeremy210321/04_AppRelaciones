<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    //RELACION UNO A MUCHOS
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    //RELACION DE MUCHOS A MUCHOS
    public function colleges()
    {
        return $this->belongsToMany(College::class)->withTimestamps();
    }
}
