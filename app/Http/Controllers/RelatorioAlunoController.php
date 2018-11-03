<?php

namespace App\Http\Controllers;

use App\Model\AlunoClasse;
use App\Model\PersonaModel;
use Illuminate\Http\Request;

class RelatorioAlunoController extends Controller
{
    //
    public function getRelatorioAluno($id)
    {
        $aluno = AlunoClasse::where('codigo_persona', $id)->first();
        $avaliacao = PersonaModel::where('codigo_pessoa', $aluno->codigo_persona)->first();
        if(!empty($avaliacao)) {
            $avaliacaoArray = ['nome' => $aluno->nome,
                'avaliacao' => $avaliacao->avalicao_escrita,
                'sentimento' => $avaliacao->sentimento
            ];
        }
        else{
            $avaliacaoArray = ['nome' => $aluno->nome,
                'avaliacao' => "Sem Avaliação nos ultimos dias",
                'sentimento' => ''];
        }
        return view('meuAluno', ['avaliacao' => $avaliacaoArray, 'aluno' => $aluno]);
    }
}
