<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nrc extends Model
{
    use HasFactory;

    //a nrc belongsTo a user
    public function user(){

        return $this->belongsTo(User::class);
        
    }
}
