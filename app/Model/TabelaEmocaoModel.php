<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 03/11/2018
 * Time: 08:57
 */

namespace App\Model;
use Illuminate\Database\Eloquent\Model;


class TabelaEmocaoModel extends Model
{
    protected $table = 'sentimentos';
    public $timestamps = false;//Define as colunas create_at e update_at
    public $primaryKey = 'id';
    protected $connection = 'psy_transp_desenv';
}
