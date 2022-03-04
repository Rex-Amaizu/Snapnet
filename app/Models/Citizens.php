<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizens extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'gender', 'address', 'phone', 'wards_id'];

    public function wards()
    {
        return $this->belongsTo(Wards::class);
    }
}
