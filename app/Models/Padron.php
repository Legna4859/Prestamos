<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Padron extends Model
{
    use HasFactory;

    protected $primarykey = 'id_padron';
    protected $table = 'padrones';
    protected $fillable = [
        'id_padron',
        'Nombre',
        'Puesto',
    ];
}
