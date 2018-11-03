<!doctype html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Teste</title>
    <style>
         body
         {
         background: url('img/fundo.jpg') no-repeat center center fixed;
         background-size: cover;
         }
      </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <!-- <div class="card card-signin my-5"> -->
          <!-- <div class="card-body"> -->
            <br/>
            <br/>
            <br/>
            
            <h1 class="text-center" style="font-family: roboto;">Educa4Feel</h1>
              @if (Session::has('message'))
                  <div style="text-align: center; margin:auto;"
                       class="alert alert-danger">{{ Session::get('message') }}</div>
              @endif
              <form class="form-signin" action="\login\professor" method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-label-group">
                <input type="email" name ='email' id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
                <label for="inputEmail" style="font-family: roboto;">Usuario</label>
              </div>
              <div class="form-label-group">
                <input type="password" name = 'senha' id="inputPassword" class="form-control" placeholder="Senha" required>
                <label for="inputPassword" style="font-family: roboto;">Senha</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1" style="font-family: roboto;">Esqueci a senha</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>

            </form>
          <!-- </div> -->
        <!-- </div> -->
      </div>
    </div>
  </div>
  <footer></footer>
</body>

</html>
