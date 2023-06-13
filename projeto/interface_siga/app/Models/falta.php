<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Falta extends Model
{
    use HasFactory;
    protected $fillable = [
        'materia_id',
        'user_id',
        'presenca',
        'falta',
    ];
    public function materia(){
        return $this->belongsTo(materia::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
