<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    /** @use HasFactory<\Database\Factories\InstituicaoFactory> */
    use HasFactory;

    protected $table = "instituicoes";

    protected $fillable = [
        'nome',
        'cidade',
        'estado',
    ];
}
