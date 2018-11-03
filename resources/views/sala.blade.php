@extends('layout')
@section('pagina')
<div class="container text-center">
    <h1 style="font-family: roboto">Métricas da sala</h1>
    <div class="row">
        <div class="text-center col-lg-6" id="grafico"></div>
        <div class="table-responsive col-lg-6">
            <div class="well hidden well-sm clearfix" data-target="tabela1">

                <div class="panel panel-primary">
                    </table>
                    <table class="table">
                        <thead class="black white-text">
                        <tr>
                            <th scope="col" style="font-family: roboto;">Alunos</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($alunos as $aluno)
                            <tr>
                                <td ><a style="font-family: roboto;"
                                        href="/meuAluno/{{$aluno['id']}}">{{$aluno['nome']}}</a></td>
                            </tr>
                        @endforeach
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
    </div>
</div>
@endsection
@section('scripts')
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
@endsection