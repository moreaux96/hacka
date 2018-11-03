<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 03/11/2018
 * Time: 08:57
 */

namespace App\Model;
use Illuminate\Database\Eloquent\Model;


class EmocaoModel extends Model
{
    protected $table = 'pessoa_emocao_ai';
    public $timestamps = false;//Define as colunas create_at e update_at
    public $primaryKey = 'id';
    protected $connection = 'psy_transp_desenv';
}