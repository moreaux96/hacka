@include('layout')
<div class="container">
   <div class="row">
      <div class="col-md-12 text-left">
         <h1 style="font-family: roboto;"> Bem vindo {nomeProf} </h1>
      </div>
      <div class="col-md-8 text-center">
         <h2 style="font-family: roboto;"> Avaliação</h2>
      </div>
   </div>
      <form  action="/avaliar" method="post">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <label for="sentimentos">Sentimentos</label>
         <div class="row text-center text-nowrap">
            <div class=" text-center text-nowrap">
               <label>
                  <input type="checkbox" name="sentimento" class="btn-radio" value="triste"/>
                  <img src="{!! asset('img/triste.png') !!}" name="triste" style="max-width: 100px; max-height: 50px;"
                       class="text-center img-radio" alt="triste">
                  <input type="submit">
               </label>
            </div>

            <div class=" text-center text-nowrap">
               <label>
                  <input type="checkbox" name="sentimento" class="btn-radio" value="apaixonado"/>
                  <img src="{!! asset('img/apaixonado.png') !!}" name="apaixonado"
                       style="max-width: 100px; max-height: 50px;" class="text-center img-radio" alt="apaixonado">
                  <input type="submit">
               </label>
            </div>

            <div class=" text-center text-nowrap">
               <label>
                  <input type="checkbox" name="sentimento" class="btn-radio" value="sorriso"/>
                  <img src="{!! asset('img/sorriso.png') !!}" name="sorriso"
                       style="max-width: 100px; max-height: 50px;" class="text-center img-radio" alt="sorriso">
                  <input type="submit">
               </label>
            </div>

            <div class=" text-center text-nowrap">
               <label>
                  <input type="checkbox" name="sentimento" class="btn-radio" value="prantos"/>
                  <img src="{!! asset('img/em prantos.png') !!}" name="em prantos"
                       style="max-width: 100px; max-height: 50px;" class="text-center img-radio" alt="em prantos">
                  <input type="submit">
               </label>
            </div>

            <div class=" text-center text-nowrap">
               <label>
                  <input type="checkbox" name="sentimento" class="btn-radio" value="bravo"/>
                  <img src="{!! asset('img/bravo.png') !!}" name="bravo" style="max-width: 100px; max-height: 50px;"
                       class="text-center img-radio" alt="bravo">
                  <input type="submit">
               </label>
            </div>
         </div>
      <div class="row">
         <div class="col-md-4">
            <div class="form-group">
               <label for="sala">Escolha a sala</label>
               <select id="sala" class="form-control" name="sala">
                  @foreach($classes as $classe)
                     <option value="{{ $classe['id'] }}">{{$classe['descricao']}}</option>
                  @endforeach
               </select>
            </div>
         </div>
         <div class="col-md-4" >
            <div class="form-group">
               <label for="aluno">Escolha a sala</label>
               <select id="aluno" class="form-control" name="aluno">
                  <option id="0">Escolha o Aluno</option>
               </select>
            </div>
         </div>
         <div class="col-lg-8">
            <div class="form-group">
               <label style="font-family: roboto;">Realize o comentario</label>
               <textarea
                       class="form-control"
                       style="height: 150px;"
                       name="comentario"
                       id="comentario"
                       placeholder="Escreva os seus comentários..."
                       required>
               </textarea>
            </div>
         </div>
         <div class="col-lg-6 text-left">
            <div class="form-group" >
               <button type="submit"
                       id="enviar_avaliacao"
                       class="btn btn-primary w-25">Enviar
               </button>
            </div>
         </div>
         <div class="col-lg-3 text-center">
            <div class="form-group">
               <button type="button" class="btn btn-primary">
                  <a href="/minha_area" style="color: floralwhite">Voltar</a>
               </button>
            </div>
         </div>
      </div>
      </form>
   <script>
       $( document ).ready(function() {
           $("#sala").on('change', function () {
               var id = $(this).val();
               $("#aluno").empty();
               if(id != 0) {
                   $.get( "alunos/"+id, function( data ) {
                       $("#aluno").empty();
                       data.forEach(function (result) {
                           $("#aluno").append('<option value='+result.id+'>'+result.nome + '</option>')
                           console.log();
                       });
                   });
               }
           });
       });
   </script>
</div>