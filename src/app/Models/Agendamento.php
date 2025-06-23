<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [
        'servico',
        'data',
        'horario',
        'profissional_id',
    ];

    function profissional(){
        return $this->belongsTo(Profissional::class);
    }
}
