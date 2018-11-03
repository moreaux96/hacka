<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClasseModel extends Model
{
    protected $table = 'classe';
    public $timestamps = false;//Define as colunas create_at e update_at
    public $primaryKey = 'id';
    protected $connection = 'psy_transp_desenv';
}

