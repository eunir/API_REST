<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../public/css/theme.css" type="text/css">
  <title>Cadastre-se</title>
</head>

<body >
  <nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container"> <a class="navbar-brand" href="#">
        <i class="fa d-inline fa-lg fa-stop-circle"></i>
        <b>Meu Vereador</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar16">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <div class="py-5 text-center" >
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-6 col-10">
          <h1>Cadastre-se</h1>
          <p class="mb-3">Os dados abaixo solicitados são de preenchimento obrigatório.</p>
          @include('includes.alertas');
          <form class="text-left" action="cadastrar" method="POST">
            {{ csrf_field() }}
            <div class="form-group"> <label for="form16">Seu nome</label> <input type="text" class="form-control" id="form16" name="nome" value="{{old('nome')}}" placeholder="Nome"> </div>
            <div class="form-group"> <label for="form17">Seu cargo</label> <input type="text" class="form-control" id="form17" name="cargo" value="{{old('cargo')}}" placeholder="Cargo"> </div>
            <div class="form-group"> <label for="form18">Seu email</label> <input type="email" class="form-control" id="form18" name="email" value="{{old('email')}}" placeholder="seu_email@gmail.com"> </div>
            <div class="form-row">
              <div class="form-group col-md-6"> <label for="form19">Senha</label> <input type="password" class="form-control" id="form19" name="senha" value="{{old('senha')}}" placeholder=""> </div>
              <div class="form-group col-md-6"> <label for="form20">Confirmar senha</label> <input type="password" class="form-control" id="form20" name="confirmarSenha" value="{{old('confirmarSenha')}}" placeholder=""> </div>
            </div>
            <div class="form-group">
              <div class="form-check"> <input class="form-check-input" type="checkbox" id="form21" value="on"> <label class="form-check-label" for="form21"> I Agree with <a href="#">Term and Conditions</a> of the service </label> </div>
            </div> <button type="submit" class="btn btn-primary">Salvar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">© 2019 - Câmara de Vereadores. Erechim - RS</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>

</html>