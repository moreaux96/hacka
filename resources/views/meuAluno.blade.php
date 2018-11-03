<!doctype html>
<html>

<head>
    <style>
        body
        {
            background: url('img/fundo.jpg') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>Bem vindo Aluno 1</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
<h1 style="font-family: roboto" class="text-center" style="font-family: roboto;">Bem vindo ao relatório de {{$aluno->nome}}!</h1>
<div class="container">
    <div class="row">
        <div>

            <h2 style="font-family: roboto; margin-top: 100px;" class="text-right" style="font-family: roboto;">Avaliação de sentimento</h2>
        </div>
        @if($avaliacao['sentimento'] == 'triste')
        <div>
            <img src="{!! asset('img/triste.png') !!}" name="triste" style="max-width: 100px; max-height: 50px; margin-top: 150px; margin-left: -200px;"  alt="triste">
        </div>
        @elseif($avaliacao['sentimento'] == 'apaixonado')
            <div>
                <img src="{!! asset('img/apaixonado.png') !!}" name="apaixonado" style="max-width: 100px; max-height: 50px; margin-top: 150px; margin-left: -200px;"  alt="apaixonado">
            </div>
        @elseif($avaliacao['sentimento'] == 'sorriso')
            <div>
                <img src="{!! asset('img/sorriso.png') !!}" name="sorriso" style="max-width: 100px; max-height: 50px; margin-top: 150px; margin-left: -200px;"  alt="sorriso">
            </div>
        @elseif($avaliacao['sentimento'] == 'prantos')
            <div>
                <img src="{!! asset('img/em prantos.png') !!}" name="prantos" style="max-width: 100px; max-height: 50px; margin-top: 150px; margin-left: -200px;"  alt="triste">
            </div>
'       @elseif($avaliacao['sentimento'] == 'bravo')
            <div>
                <img src="{!! asset('img/bravo.png') !!}" name="bravo" style="max-width: 100px; max-height: 50px; margin-top: 150px; margin-left: -200px;"  alt="bravo">
            </div>
        @endif
<h1 style="font-family: roboto; margin-top: 100px; margin-left:40px;" class="text-left" style="font-family: roboto;">Relatorio do Aluno<br> <p>{!! $avaliacao['avaliacao'] !!}</p>
</h1>
<div class="row">
 <div class="text-right" id="grafico"></div>
</div>
</div>
<div class="text-center">
<button type="button" class="btn btn-primary">
 <a href="{{ URL::previous() }}" style="color: floralwhite">Voltar</a>
</button>
</div>
</div>
</body>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(criaGrafico);

function criaGrafico() {
var data = new google.visualization.DataTable();
data.addColumn('string', 'Topping');
data.addColumn('number', 'Slices');
data.addRows([
 ['Muito Alegre', 1],
 ['Alegre', 1],
 ['Triste', 5],
 ['Muito Triste', 1],
 ['Raiva', 2]
]);

var options = {'title':'Resultado analise de sentimento',
 'width':800,
 'height':400};

var chart = new google.visualization.PieChart(document.getElementById('grafico'));
chart.draw(data, options);
}
</script>
</html>
