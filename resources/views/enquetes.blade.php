<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    <link rel="stylesheet" href="../public/css/theme.css" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar19">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar19"> <a class="navbar-brand d-none d-md-block" href="#">
                    <i class="fa d-inline fa-lg fa-stop-circle-o"></i>
                    <b>Enquetes</b>
                </a>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"> <a class="nav-link" href="#">Chamados</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Documentos</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Informações</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Usuários</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" href="#">
                            <i class="fa fa-twitter fa-fw"></i>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">
                            <i class="fa fa-facebook fa-fw"></i>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">
                            <i class="fa fa-slack fa-fw"></i>
                        </a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="py-3 text-center">
        <div class="container">
            <div class="row">
                <div class="mx-auto p-4 col-lg-7">
                    <h1 class="mb-4">Iniciar nova enquete</h1>
                    @include('includes.alertas');
                    <form action="novaenquete" method="POST">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="form16">Selecione o Responsável</label>
                                <select type="text" name="responsavel" class="form-control">
                                    @foreach ( $funcionario as $funcionario )
                                    <option value="{{$funcionario->nome_funcionario}}" class="form-control">{{$funcionario->nome_funcionario}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="form16">Data de abertura</label>
                                <input class="form-control" size="16" name="data" type="date" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="form16">Descrição da enquete</label>
                            <textarea class="form-control" id="form30" rows="3" name="descricao"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 text-center" >
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-5 col-md-7 col-10">
          <h1>Gerenciar enquetes</h1>
          <p class="mb-3"> Para acompanhar a votação das enquetes e visualizar os comentários, acesse a página de votação.</p> 
          <a class="btn btn-primary" href="votacao">Ir para...</a>
        </div>
      </div>
    </div>
  </div>
    <div class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">©Eunir Kaiser - 2019 - Câmara de Vereadores. Erechim - RS</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>