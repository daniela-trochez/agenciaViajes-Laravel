<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viajero extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function viajes(){
        return $this->hasMany(Viaje::class);
    }
}
