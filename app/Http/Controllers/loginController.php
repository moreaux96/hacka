<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model;
use HTTP_Request2;


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

    public function postImagem(Request $request){
       $this->postAnaliseImagem($request->imagem64);
    }

    public function postAnaliseImagem($imagem){

        $ocpApimSubscriptionKey = '556adb52b3774707b911490596bbc756';
        $uriBase = 'https://westcentralus.api.cognitive.microsoft.com/face/v1.0/';

        $request = new Http_Request2($uriBase . '/detect');
        $url = $request->getUrl();

        $headers = array(
            'Content-Type' => 'application/json',
            'Ocp-Apim-Subscription-Key' => $ocpApimSubscriptionKey
        );

        $request->setHeader($headers);
        $parameters = array(
            // Request parameters
            'returnFaceId' => 'true',
            'returnFaceLandmarks' => 'false',
            'returnFaceAttributes' => 'emotion');
        $url->setQueryVariables($parameters);

        $request->setMethod(HTTP_Request2::METHOD_POST);
        $body = json_encode(array('url' => $imagem));
        $request->setBody($body);

        try {
            $response = $request->send();

            $dados =  json_decode($response->getBody(),JSON_PRETTY_PRINT);
            dd($dados);
            RETURN $dados[0];
        }
        catch (HttpException $ex) {
            return $ex;
        }
    }

    public function postObrigado(Request $request){

        return view('/obrigado');
    }

    public function respostaAluno(Request $request){
        return view('/obrigado');
    }

    public function getAvalicao(){
       $classe = Model\ClasseModel::where('id','<>','')->get();
       dd($classe);
    }

}
