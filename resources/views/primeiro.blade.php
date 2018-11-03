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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>
<body>
<div class="container text-center">
    <h1 style="font-family: roboto; margin-left: 200px; margin-top: 75px;">Métricas da sala</h1>
    <div class="row">
        <div class="text-center col-lg-6" id="grafico"></div>
        <div class="table-responsive col-lg-6">
            <div class="well hidden well-sm clearfix" data-target="tabela1">

                <div class="panel panel-primary">
                    </table>
                    <table class="table">
                        <thead class="black white-text">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="font-family: roboto;">Alunos</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td ><a style="font-family: roboto;" href="/meusalunos">Marco</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><a style="font-family: roboto;" href="#">Larry</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><a style="font-family: roboto;" href="#">Fenando</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary">
                        <a href="/salas" style="color: floralwhite">Voltar</a>
                    </button>
                </div>
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
            ['Muito Alegre', 3],
            ['Alegre', 1],
            ['Triste', 1],
            ['Muito Triste', 1],
            ['Raiva', 2]
        ]);

        var options = {'title':'Gráfico de sentimento geral da classe',
            'width':500,
            'height':400};

        var chart = new google.visualization.PieChart(document.getElementById('grafico'));
        chart.draw(data, options);
    }
</script>
</html>
