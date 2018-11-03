<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>

        body
        {
            background: url('img/fundo.jpg') no-repeat center center fixed;


            background-size: cover;
        }

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/sala.css')}}">
    <meta charset="utf-8">
    <title>Salas</title>
</head>
<body>
<h1 style="font-family: roboto; margin-left: 200px; margin-top: 75px;">Classes</h1>
<div class="container">
    <div class="row">
        <div class="text-center col">
            <a class="btn btn-primary btn-lg" style="font-family: roboto;" href="/primeiro" role="button">1° ano A</a>
        </div>
        <div class="text-center col">
            <button type="button" style="font-family: roboto;" name="primeiro_b" class="btn btn-primary btn-lg" >1°ano B</button>
        </div>
        <div class="text-center col">
            <button type="button" style="font-family: roboto;" name="segundo_a" class="btn btn-primary btn-lg" >2°ano A</button>
        </div>
        <div class="text-center col">
            <button type="button"  style="font-family: roboto;"name="segundo_b" class="btn btn-primary btn-lg" >2°ano B</button>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="text-right">
        <button type="button" class="btn btn-primary">
            <a href="/minha_area" style="color: floralwhite" >Voltar</a>
        </button>
    </div>
</div>
</body>
</html>
