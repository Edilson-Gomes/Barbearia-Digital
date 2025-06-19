<?php

namespace Src\App\Modules\Clientes\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cliente extends Model
{

    use HasFactory, Notifiable;

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'cpf',
        'data_nascimento',
    ]
    {}
}