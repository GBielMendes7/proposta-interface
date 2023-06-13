<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'sigla',
        'professor',
        'turma',
        'falta_id',
        'nota_id'
    ];

    public function falta(){
        return $this->belongsTo(falta::class);
    }

    public function nota(){
        return $this->belongsTo(nota::class);
    }
}
