<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sala extends Model
{
    use HasFactory;

    protected $fillable = ['profesor_ID','alumno_ID','materia_ID'];
}
