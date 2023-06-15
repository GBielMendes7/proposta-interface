<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nota extends Model
{
    use HasFactory;
    protected $fillable = [
        'materia_id',
        'user_id',
        'nota_p1',
        'nota_p2'
    ];
    public function materia(){
        return $this->belongsTo(materia::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function falta()
    {
        return $this->hasOne(Falta::class, 'materia_id', 'materia_id');
    }
}
