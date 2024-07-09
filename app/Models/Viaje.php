<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function viajero(){
        return $this->belongsTo(Viajero::class);
    }

    public function destino(){
        return $this->belongsTo(Destino::class);
    }

    public function origen(){
        return $this->belongsTo(Origen::class);
    }

}
