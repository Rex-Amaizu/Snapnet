<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lgas extends Model
{
    use HasFactory;

    public function states()
    {
        return $this->belongsTo(States::class);
    }

    public function wards() 
    {

        return $this->hasOne(Wards::class);
    }
}
