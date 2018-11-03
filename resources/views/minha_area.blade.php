@include('layout')
<div class="container">
    <div class="row">
        <div class="col-4">
             <span>
            <button type="button" class="btn btn text-right">
                <h3 class="text-right" style="font-family: roboto;">Professor: XPTO</h3>
            </button>
            </span>
            <span class="d-none d-lg-block">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/logo.png" alt="">
            </span>
        </div>
        <div class="col-6 text-right">
            <h2 style="font-family: roboto;">Area do Professor</h2>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-3">
            <a class="btn btn-primary btn-lg" href="/salas" role="button">Classes</a>
        </div>
        <div class="col-3">
            <a class="btn btn-primary btn-lg" href="/avaliar" role="button">Avaliação</a>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-2">
            <button type="button" class="btn btn-primary">
                <a href="/login" style="color: floralwhite">Sair</a>
            </button>
        </div>
    </div>
</div>
