<?php

namespace App\Http\Controllers;

use App\Model\ClasseModel;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    //
    public function getAvalicao(){
        $classes = ClasseModel::where('id','<>','')->get();
        $classeArray[] = ['id' => 0, 'descricao' => 'Selecione a Classe'];
        foreach ($classes as $classe) {
            $classeArray[] = ['id' => $classe->id, 'descricao' => $classe->descricao];
        }
        return view('avaliacao', ['classes' => $classeArray]);
    }

    public function postAvalicao(Request $request) {
        dd($request->all());
    }
}
