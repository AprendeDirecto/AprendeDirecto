<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicacion extends Model
{
    use HasFactory;

    protected $table = 'publicacion';

    protected $fillable = ['nombrePublicacion','descripcion','profesor_ID','materia_ID'];
}
