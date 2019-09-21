<div class="panel-body">
    <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
</div>
<?php if(session('sucesso')): ?>
    <div class="alert alert-success">
        <p><?php echo e(session('sucesso')); ?></p>
    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger">
        <p><?php echo e(session('error')); ?></p>
    </div>
<?php endif; ?>
          <?php /**PATH C:\xampp\htdocs\API_REST\resources\views/includes/alertas.blade.php ENDPATH**/ ?>