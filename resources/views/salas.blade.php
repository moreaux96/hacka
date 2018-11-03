@extends('layout')
@section('pagina')
    <div class="container">
        <div class="row">
            <button type="button" class="btn btn-primary">
                <a href="/minha_area" style="color: floralwhite" >Voltar</a>
            </button>
        </div>
        <div class="row text-center" style="margin: 150px;">
            <div class="col-12">
                <h1 style="font-family: roboto;">Classes</h1>
            </div>
        </div>
        <div class="row text-center">
            @foreach($classes as $classe)
                <div class="text-center col-3">
                    <a class="btn btn-primary btn-lg"  name="classe" style="font-family: roboto;" href="/sala/{{ $classe['id'] }}" role="button">{{ $classe['descricao'] }}</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection