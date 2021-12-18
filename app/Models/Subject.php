<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    //RELACIÓN UNO A MUCHOS
    public function career(){
        return $this->belongsTo(Career::class);
    }
 
}
