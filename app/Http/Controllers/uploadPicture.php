<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use HTTP_Request2;

class uploadPicture extends Controller
{
    public function postImages(Request $request)
    {
        define('UPLOAD_DIR', 'fotos/');
        $img = $_POST['base64image'];
        $img = str_replace('data:image/jpeg;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $file = UPLOAD_DIR . uniqid() . '.jpg';
        $success = file_put_contents($file, $data);
        print $success ? $file : 'Não é possível salvar o arquivo.';
    }

    public function postAnaliseImagem($quero){

        $ocpApimSubscriptionKey = '556adb52b3774707b911490596bbc756';
        $uriBase = 'https://westcentralus.api.cognitive.microsoft.com/face/v1.0/';

        if($quero){
            $urlImagem = 'https://uploaddeimagens.com.br/images/001/680/664/original/e2312123213.jpg';

        }else {
            $urlImagem = 'https://uploaddeimagens.com.br/images/001/680/680/full/lindinha.jpg';
        }

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
        $body = json_encode(array('url' => $urlImagem));
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

    public function convertTObase64($oi){

    }
}
