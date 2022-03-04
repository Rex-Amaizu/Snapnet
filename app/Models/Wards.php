<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wards extends Model
{
    use HasFactory;

    public function lgas()
    {
        return $this->belongsTo(Lgas::class);
    }

    public function citizens() 
    {

        return $this->hasOne(Citizens::class);
    }
}
