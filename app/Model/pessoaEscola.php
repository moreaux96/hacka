<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class pessoaEscola extends Model
{
    protected $table = 'pessoa_escola';
    public $timestamps = false;//Define as colunas create_at e update_at
    public $primaryKey = 'codigo';
    protected $connection = 'mysql';
}
