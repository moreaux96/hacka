<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class questionario extends Model
{
    protected $table = 'questionario';
    public $timestamps = false;//Define as colunas create_at e update_at
    public $primaryKey = 'cod_questionario';
    protected $connection = 'mysql';
}
