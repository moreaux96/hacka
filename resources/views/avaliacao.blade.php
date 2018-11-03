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
      <form class="row" action="\obrigadoProf" method="post">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="col-md-4">
            <div class="form-group">
               <label style="font-family: roboto;">Escolha a sala</label>
               <input type="text"
                      class="form-control"
                      name="sala"
                      id="sala"
                      placeholder="SALA"
                      required>
            </div>
         </div>
         <div class="col-md-4" >
            <div class="form-group">
               <label style="font-family: roboto;">Escolha o Aluno</label>
               <input type="text"
                      class="form-control"
                      name="aluno"
                      id="aluno"
                      placeholder="ALUNO"
                      required>
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
               <button name="enviar_avaliacao"
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
      </form>
</div>