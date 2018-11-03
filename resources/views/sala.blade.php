@extends('layout')
@section('pagina')
<div class="container text-center">
    <h1 style="font-family: roboto">Métricas da sala</h1>
    <div class="row">
        <div class="text-center">
            <button type="button" class="btn btn-primary">
                <a href="/salas" style="color: floralwhite">Voltar</a>
            </button>
        </div>
        <div class="text-center col-lg-6" id="grafico"></div>
        <div class="table-responsive col-lg-12">
            <div class="well hidden well-sm clearfix" data-target="tabela1">
                <form  action="/meuAluno" method="post" id="formAluno">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="panel panel-primary">
                        <div class="form-group">
                            <label for="alunos">Escolha o Aluno</label>
                            <select id="alunos" class="form-control" name="alunos">
                                @foreach($alunos as $aluno)
                                    <option value="{{ $aluno['id'] }}">{{$aluno['nome']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit"
                            class="btn btn-primary w-25">Pesquisar
                    </button>
                </form>
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
    $( "#formAluno" ).submit(function( ) {
        var id = $("#alunos option:selected").val();
        if(id != 0) {
            return true
        }
        return false;
    });
</script>
@endsection
