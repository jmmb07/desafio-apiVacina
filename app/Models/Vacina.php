<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacina extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'email_usuario',
        'data_aplicacao',
        'name_aplicador',
    ];
}
