<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    //RELACION DE MUCHOS A MUCHOS
    public function careers(){
        return $this -> belongsToMany(Career::class)->withTimestamps();
    }
}
