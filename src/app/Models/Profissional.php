<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = 'profissionais';
    protected $fillable = [
        'nome',
        'profissao',
        'disponivel',
    ];

    function agendamentos(){
        return $this->hasMany(Agendamento::class);
    }
}
