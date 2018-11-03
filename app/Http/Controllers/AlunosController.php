<?php

namespace App\Http\Controllers;

use App\Model\AlunoClasse;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    //
    public function getAlunos($id)
    {
        $alunos = AlunoClasse::where('codigo_classe', $id)->get();
        $alunosArray[] = ['id' => 0, 'nome' => 'Selecione o Aluno'];
        foreach ($alunos as $aluno) {
            $alunosArray[] = ['id' => $aluno->codigo_persona, 'nome' => $aluno->nome];
        }
        return response()->json($alunosArray);
    }
}
