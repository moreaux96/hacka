<?php

namespace App\Http\Controllers;

use App\Model\ClasseModel;
use App\Model\PersonaModel;
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
        $persona = new PersonaModel();
        $persona->codigo_pessoa = $request->aluno;
        $persona->avalicao_escrita = $request->comentario;
        $persona->sentimento = $request->sentimento;
        $persona->save();
        return redirect('/obrigado');
    }
}
