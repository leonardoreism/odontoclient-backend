<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'pessoa';

    protected $fillable = [
        'nome','telefone','email','endereco', 'numero', 'bairro', 'cpf', 'idade', 'sexo', 'senha'
    ];

    protected $hidden = [
      'senha'
    ];

}
