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
          <b>Detalhes</b>
        </a>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="chamados">Chamados</a> </li>
          <li class="nav-item"> <a class="nav-link" href="enquetes">Enquetes</a> </li>
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
  <?php $__currentLoopData = $chamado; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chamado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="mx-auto text-center col-lg-4">
          <h4 class="mb-3">Tipo: <?php echo e($chamado->tipo_chamado); ?></h4>
        </div>
        <div class="mx-auto text-center col-lg-4">
          <h4 class="mb-3">Status: <?php echo e($chamado->status_chamado); ?></h4>
        </div>
        <div class="mx-auto text-center col-lg-4">
          <h4 class="mb-3">Responsável: <?php echo e($chamado->responsavel); ?></h4>
        </div>
      </div>
      <div class="row">
        <div class="mx-auto text-center col-lg-6">
          <p class="lead mb-4"><?php echo e($chamado->descricao); ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="embed-responsive embed-responsive-16by9">
            <?php 
              $extension = pathinfo($chamado->imagem_video)['extension'];
            ?>
            <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"): ?>
             <img src="<?php echo e('../public/storage/imagens/'.$chamado->imagem_video); ?>" class="embed-responsive-item" ></img>
            <?php else: ?>
             <video src="<?php echo e('../public/storage/imagens/'.$chamado->imagem_video); ?>" class="embed-responsive-item" controls="controls"> Your browser does not support HTML5 video. </video>
            <?php endif; ?>
          </div>
        </div>
        <div class="px-4 order-1 order-md-2 col-lg-6">
       
          <form action="alterar" method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
               <label for="form16">Status</label>
               <select type="text" name="status" class="form-control" class="col-lg-3">
                <option value="Aberto" class="form-control">Aberto</option>
                <option value="Em análise" class="form-control">Em análise</option>
                <option value="Em andamento" class="form-control">Em andamento</option>
                <option value="Finalizado" class="form-control">Finalizado</option>
              </select>
            </div>
            <div class="form-group">
              <label for="form16">Responsável</label>
              <select type="text" name="responsavel" class="form-control" class="col-lg-3">
              <?php $__currentLoopData = $funcionario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $funcionario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($funcionario->nome_funcionario); ?>" class="form-control"><?php echo e($funcionario->nome_funcionario); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <div class="form-group"> 
              <textarea class="form-control" name="comentario" id="form46" rows="3" placeholder="Adicionar comentário"></textarea> 
            </div> 
            <input type="hidden" name="id" value="<?php echo e($chamado->id); ?>">
            <button type="submit" class="btn btn-primary">Salvar alterações</button>
          </form>

        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <iframe width="100%" height="400" src="https://maps.google.com/maps?q=New%20York&amp;z=14&amp;output=embed" scrolling="no" frameborder="0">
          </iframe>
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

</html><?php /**PATH C:\xampp\htdocs\API_REST\resources\views/detalhe.blade.php ENDPATH**/ ?>