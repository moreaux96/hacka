<!doctype html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8 " name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="{{asset('js/webcamjs-master/webcam.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/perguntas.css')}}">
    <script src="{{asset('js/perguntas.js')}}"></script>
    <script language="JavaScript">

        function salvar_foto(foto) {
            console.log(foto);
            $.ajax({
                header:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: "/uploadimagem",
                data: {'imagem64':foto},
                success: function(data){
                    console.log(data);
                }
            });
        }

        function bater_foto() {
            Webcam.snap(function (data_uri) {
                salvar_foto(data_uri);
            });
        }

        $(function(){
            id = [];
            $(".btn-radio").click(function(event){
                $(".check").each(function(){
                    id.push($(".check:checked").val());
                });
                bater_foto();
                location.reload();
                // window.releaseEvents.href = "http://localhost:8000/perguntas_aluno#";
                event.preventDefault();
            });
        });
        function mostrar_camera() {
            Webcam.set({
                width: 190,
                height: 280,
                dest_width: 190,
                dest_height: 280,
                image_format: 'jpeg',
                jpeg_quality: 100,
                flip_horiz: true
            });
            Webcam.attach('#minha_camera');
        }

        window.onload = mostrar_camera;

    </script>
    <style type="text/css">
        /*
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
        */
        body {
            background: url('img/fundo.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .sentimento {
            width: 320px;
            height: 480px;
        }
    </style>
</head>
<body>

<div class="container" id="camera">
        <form class="form-signin " method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Como você esta se sentido hoje ?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col text-center" id="minha_camera"></div>
            </div>
            <div class="row justify-content-md-end">
                <div class="col-md-2 sentimento" style=" width: 320px;height: 480px;">
                    <label>
                        <input type="checkbox" onclick="bater_foto()" name="triste" class="btn-radio" value="triste"/>
                        <img src="{!! asset('img/triste.png') !!}" name="triste" style="max-width: 100px; max-height: 50px;"
                             class="text-center img-radio" alt="triste">
                        <input type="submit">
                    </label>
                </div>
                <div class="col-md-2 sentimento">
                    <label>
                        <input type="checkbox" name="apaixonado" class="btn-radio" onclick="bater_foto()" value="apaixonado"/>
                        <img src="{!! asset('img/apaixonado.png') !!}" name="apaixonado"
                             style="max-width: 100px; max-height: 50px;" class="text-center img-radio" alt="apaixonado">
                        <input  type="submit">
                    </label>
                </div>

                <div class="col-md-2 sentimento">
                    <label>
                        <input type="checkbox" name="sorriso" class="btn-radio"  onclick="bater_foto()" value="sorriso"/>
                        <img src="{!! asset('img/sorriso.png') !!}" name="sorriso"
                             style="max-width: 100px; max-height: 50px;" class="text-center img-radio" alt="sorriso">
                        <input  type="submit">
                    </label>
                </div>

                <div class="col-md-2 sentimento">
                    <label>
                        <input type="checkbox" name="em prantos" class="btn-radio" onclick="bater_foto()" value="em prantos"/>
                        <img src="{!! asset('img/em prantos.png') !!}" name="em prantos"
                             style="max-width: 100px; max-height: 50px;" class="text-center img-radio" alt="em prantos">
                        <input  type="submit">
                    </label>
                </div>

                <div class="col-md-2 sentimento">
                    <label>
                        <input type="checkbox" name="bravo" class="btn-radio" onclick="bater_foto()" value="bravo"/>
                        <img src="{!! asset('img/bravo.png') !!}" name="bravo" style="max-width: 100px; max-height: 50px;"
                             class="text-center img-radio" alt="bravo">
                        <input  type="submit">
                    </label>
                </div>
            </div>
        </form>

</div>
</body>
</html>