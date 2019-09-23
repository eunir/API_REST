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
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar19" style="">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar19"> <a class="navbar-brand d-none d-md-block" href="#">
          <i class="fa d-inline fa-lg fa-stop-circle-o"></i>
          <b>Chamados</b>
        </a>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="#">Enquetes</a> </li>
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
  <div class="py-5" >
    <div class="container">
      <div class="row">
        <div class="ml-auto col-lg-12 text-center text-lg-center">
          <h1>Lista de Chamados</h1>
          <p class="mb-0">Os chamados são listados pelo status em aberto, selecione um STATUS ou TIPO para visualizar os demais chamados.</p>
        </div>
        <div class="col-lg-12 d-flex justify-content-center align-items-center p-3">
          <form class="form-inline mb-0" action="listar" method="POST">
          <?php echo e(csrf_field()); ?>

            <div class="input-group">
              <select type="text" name="status" class="form-control" class="col-lg-3">
                <option value="1" class="form-control">Aberto</option>
                <option value="2" class="form-control">Em análise</option>
                <option value="3" class="form-control">Em andamento</option>
                <option value="4" class="form-control">Finalizado</option>
              </select>
              <div class="col-lg-1"></div>
              <div class="input-group"> 
              <select type="text" name="tipo" class="form-control" class="col-lg-3">
                <option value="" class="form-control">Denúncia</option>
                <option value="" class="form-control">Elogio</option>
                <option value="" class="form-control">Reclamação</option>
                <option value="" class="form-control">Sugestão</option>
              </select>
            </div>
            <div class="col-lg-1"></div>
            <button type="submit" class="btn btn-primary">Buscar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php $__currentLoopData = $chamado; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chamado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card text-center" >
            <div class="card-header"> Status: <?php echo e($chamado->status_chamado); ?> </div>
            <div class="card-body">
              <h5 class="card-title">Tipo: <?php echo e($chamado->tipo_chamado); ?> </h5>
              <p class="card-text"><?php echo e($chamado->descricao); ?></p>

              <form action="detalhar" method="POST">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="id" value="<?php echo e($chamado->id); ?>">
                <button type="submit" class="btn btn-primary">Detalhar</button>
              </form>
             
            </div>
            <div class="card-footer text-muted">Data de abertura: <?php echo e($chamado->data_abertura); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">© 2019 - Câmara de Vereadores. Erechim - RS</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" style=""></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous" style=""></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>

</html><?php /**PATH C:\xampp\htdocs\API_REST\resources\views/chamados.blade.php ENDPATH**/ ?>