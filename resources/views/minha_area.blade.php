@extends('layout')
@section('pagina')
<div class="container">
    <div class="row">
        <div class="col-2">
            <button type="button" class="btn btn-primary">
                <a href="/login" style="color: floralwhite">Sair</a>
            </button>
        </div>
    </div>
    <div class="row text-center" style="margin: 150px;">
        <div class="col-12">
            <h2 style="font-family: roboto;">Area do Professor</h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-6">
            <a class="btn btn-primary btn-lg" href="/salas" role="button">Classes</a>
        </div>
        <div class="col-6">
            <a class="btn btn-primary btn-lg" href="/avaliar" role="button">Avaliação</a>
        </div>
    </div>
</div>
@endsection