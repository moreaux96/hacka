<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model;

class loginController extends Controller
{
    public function postLogin(Request $request){
        if($request->senha <> '1234' && $request->email <> 'lucas@lucas.com.br'){
            \Session::flash("message",'Dados incorretos, por favor tentar novamente');
            $request->flash();
            return back();
        }

        return view('/minha_area');
    }

    public function postObrigado(Request $request){

        return view('/obrigado');
    }

    public function respostaAluno(Request $request){
        return view('/obrigado');
    }

}
