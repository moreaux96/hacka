<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AlunoClasse extends Model
{
    protected $table = 'persona_tb';
    public $timestamps = false;//Define as colunas create_at e update_at
    public $primaryKey = 'codigo_persona';
    protected $connection = 'psy_transp_desenv';
}

