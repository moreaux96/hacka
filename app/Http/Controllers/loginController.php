<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model;
use HTTP_Request2;
use Google\Cloud\Storage\StorageClient;
use Illuminate\Support\Facades\Storage;


class loginController extends Controller
{
    public function postLogin(Request $request)
    {
        
        if ($request->senha == '' && $request->email == '') {
            \Session::flash("message", 'Dados incorretos, por favor tentar novamente');
            $request->flash();
            return back();
        }

        return view('/minha_area');
    }

    public function postImagem(Request $request)
    {
        //$this->getClienteId();
        $url = $this->uploadImagem($request->imagem64);
        $post = $this->postAnaliseImagem($url);
        if($this->saveDados($post)){
            return true;
        }else{
            return false;
        }

    }

    public function saveDados($dados){
        if(!empty($dados)){
            $pessoa = Model\AlunoClasse::where('codigo_persona','<>','')->get();
            foreach($pessoa as $persona){
                foreach ($dados[0]['faceAttributes']['emotion'] as $dado => $value) {
                    $avalicao = new Model\EmocaoModel();
                    $avalicao->codigo_pessoa = $persona->codigo_persona;
                    $avalicao->emocao_id = $this->getIDEmocao($dado);
                    $avalicao->emocao_valor = $value;
                    $avalicao->save();
                }
            }
        }
    }


    public function getIDEmocao($nomeEmocao){

        $emocao = Model\TabelaEmocaoModel::where('emocao','=',$nomeEmocao)->first();
        if($emocao){
            return $emocao->id;
        }
        return 1;
    }

    public function uploadImagem($imagem){
        $img = str_replace('data:image/jpeg;base64,', '', $imagem);
        $disk = Storage::disk('gcs');
        $imagem = base64_decode($img);
        $nomeArq = $this->generateRandomString(7).'.jpeg';
        $retorno = $disk->put("{$nomeArq}",$imagem);
        if($retorno){
            $url = $this->getLink($nomeArq);
           return $url;
        }
    }

    public function generateRandomString($size = 7){
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuwxyz0123456789";
        $randomString = '';
        for($i = 0; $i < $size; $i = $i+1){
            $randomString .= $chars[mt_rand(0,60)];
        }
        return $randomString;
    }

    public function getLink($nomeArq){
        $disk = Storage::disk('gcs');
        $url = $disk->url("{$nomeArq}");
        if($url){
            return $url;
        }

    }
    public function postAnaliseImagem($imagem)
    {

        $ocpApimSubscriptionKey = '6d1cc517fbbb4eee8d2d7acde708fe23';
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

            $dados = json_decode($response->getBody(), JSON_PRETTY_PRINT);
            RETURN $dados;
        } catch (HttpException $ex) {
            return $ex;
        }
    }

    public function verificaID($Id){
        $ocpApimSubscriptionKey = '6d1cc517fbbb4eee8d2d7acde708fe23';
        $uriBase = 'https://westcentralus.api.cognitive.microsoft.com/face/v1.0/findsimilars';

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
        $body = json_encode(array('url' => $Id));
        $request->setBody($body);

        try {
            $response = $request->send();

            $dados = json_decode($response->getBody(), JSON_PRETTY_PRINT);
            RETURN $dados;
        } catch (HttpException $ex) {
            return $ex;
        }
    }

    public function postObrigado(Request $request)
    {

        return view('/obrigado');
    }

    public function respostaAluno(Request $request)
    {
        return view('/obrigado');
    }

}
