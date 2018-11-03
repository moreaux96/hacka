<!DOCTYPE html>
<html lang="BR">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        body {
            background: url('img/fundo.jpg') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/perguntas.css')}}">
    <script src="{{asset('js/perguntas.js')}}"></script>
    <title>Perguntas</title>
</head>
<body>
<div class="container">
    <br/>
    <br/>
    <div class="col-lg-12 text-center">
        <h1 style="font-family: roboto"> Como você se sente hoje?</h1>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <form class="form-signin " action="\respostas" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row text-center text-nowrap">
            <div class="col-lg-2 text-center text-nowrap">
                <label>
                    <input type="checkbox" onclick="sweetAlert('Oops...', 'Something went wrong!', 'error');"
                           name="triste" class="btn-radio" value="triste"/>
                    <img src="{!! asset('img/triste.png') !!}" name="triste" style="max-width: 100px; max-height: 50px;"
                         class="text-center img-radio" alt="triste">
                    <input type="submit">
                </label>
            </div>

            <div class="col-lg-2 text-center text-nowrap">
                <label>
                    <input type="checkbox" name="apaixonado" class="btn-radio" value="apaixonado"/>
                    <img src="{!! asset('img/apaixonado.png') !!}" name="apaixonado"
                         style="max-width: 100px; max-height: 50px;" class="text-center img-radio" alt="apaixonado">
                    <input type="submit">
                </label>
            </div>

            <div class="col-lg-2 text-center text-nowrap">
                <label>
                    <input type="checkbox" name="sorriso" class="btn-radio" value="sorriso"/>
                    <img src="{!! asset('img/sorriso.png') !!}" name="sorriso"
                         style="max-width: 100px; max-height: 50px;" class="text-center img-radio" alt="sorriso">
                    <input type="submit">
                </label>
            </div>

            <div class="col-lg-2 text-center text-nowrap">
                <label>
                    <input type="checkbox" name="em prantos" class="btn-radio" value="em prantos"/>
                    <img src="{!! asset('img/em prantos.png') !!}" name="em prantos"
                         style="max-width: 100px; max-height: 50px;" class="text-center img-radio" alt="em prantos">
                    <input type="submit">
                </label>
            </div>

            <div class="col-lg-2 text-center text-nowrap">
                <label>
                    <input type="checkbox" name="bravo" class="btn-radio" value="bravo"/>
                    <img src="{!! asset('img/bravo.png') !!}" name="bravo" style="max-width: 100px; max-height: 50px;"
                         class="text-center img-radio" alt="bravo">
                    <input type="submit">
                </label>
            </div>
        </div>
    </form>
</div>
</body>
</html>
