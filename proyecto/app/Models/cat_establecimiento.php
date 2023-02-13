<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cat_establecimiento extends Model
{
    use HasFactory;
    protected $table = 'cat_establecimiento';
    public function User(){
        return $this->belongsTo(User::class);
    }
}
