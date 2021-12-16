<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autorizar extends Model
{
    use HasFactory;
    protected $fillable =
        [
            'id_padron',
            'Nombre',
            'Puesto',
        ];
}
