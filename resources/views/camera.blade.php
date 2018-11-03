<!doctype html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8 ">
    <title>Tirar Foto</title>
    <script type="text/javascript" src="{{asset('js/webcamjs-master/webcam.min.js')}}"></script>
    <script language="JavaScript">

        function salvar_foto() {
            document.getElementById("carregando").innerHTML = "Salvando...";
            var file = document.getElementById("foto").src;
            var formdata = new FormData();
            formdata.append("foto", file);;
            var ajax = new XMLHttpRequest();
            ajax.addEventListener("load", function (event) {
                upload_completo(event);
            }, false)
            ajax.open("POST", "/foto");
            ajax.setRequestHeader('X-CSRF-Token', $('meta[name=_token]').attr('content'));
            ajax.send(formdata);
        }

        function bater_foto() {
            Webcam.snap(function (data_uri) {
                document.getElementById('results').innerHTML = '' +
                    '<img id="foto" src="' + data_uri + '"/>' +
                    '<button onclick="salvar_foto();">Tirar Foto</button>';
            });
        }




        function upload_completo(event) {
            document.getElementById("carregando").innerHTML = "";
            var image_return = event.target.responseText;
            var showup = document.getElementById("completado").src = image_return;
            var showup2 = document.getElementById("carregando").innerHTML = '<b>Upload feito:</b>';
        }

        function mostrar_camera() {
            Webcam.set({
                width: 640,
                height: 480,
                dest_width: 640,
                dest_height: 480,
                crop_width: 300,
                crop_height: 400,
                image_format: 'jpeg',
                jpeg_quality: 100,
                flip_horiz: true
            });
            Webcam.attach('#minha_camera');
        }

        window.onload = mostrar_camera;
    </script>
    <style type="text/css">
        .container {
            float: left;
            width: 320px;
            height: 480px;
            margin-right: 5px;
            padding: 5px;
        }

        #camera {
            background: #ff6666;
            height: 480px;
        }

        #previa {
            background: #ffc865;
            height: 480px;
        }

        #salva {
            background: #4dea02;
            height: 480px;
        }
    </style>
</head>
<body>
<div class="container" id="camera"><b>Câmera:</b>
    <div id="minha_camera"></div>
    <form class="form-signin " method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="button" value="Tirar Foto" onClick="bater_foto()"></form>
</div>
<div class="container" id="previa">
    <b>Prévia:</b>
    <div id="results"></div>
</div>
<div class="container" id="salva">
    <span id="carregando"></span><img id="completado" src=""/>
</div>
</body>
</html>