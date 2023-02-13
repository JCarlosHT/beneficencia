<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beneficiario extends Model
{
    use HasFactory;
    public function getnombrecompletoAttribute()
    {
       return ucfirst($this->nombre) . ' ' . ucfirst($this->primer_ape) . ' ' . ucfirst($this->segundo_ape);
    }

}
