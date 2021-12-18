<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    use HasFactory;

    //RELACION UNO A UNO
    public function user(){
        return $this->hasOne(User::class);
    }
}
