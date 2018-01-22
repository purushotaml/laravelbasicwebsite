<?php $__env->startSection('content'); ?>
  <h1>Message (<?php echo e(($messages->total())); ?>)</h1>
  <?php if(count($messages) > 0): ?>
    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="panel panel-info">
        <div class="panel-heading">From <?php echo e($message->firstname." ".$message->lastname); ?></div>
        <div class="panel-body"><?php echo e($message->message); ?></div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($messages->links()); ?>

  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>