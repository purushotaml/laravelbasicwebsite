<?php $__env->startSection('content'); ?>
<h1>CONTACT</h1>
<?php echo Form::open(['url' => 'contact/submit', 'method' => 'POST']); ?>

<div class="form-group">
  <?php echo Form::label('firstname','First Name'); ?>

  <?php echo Form::text('firstname', '',['class' => 'form-control','placeholder' => 'Please Enter Your First Name']); ?>

</div>
<div class="form-group">
  <?php echo Form::label('lastname','Last Name'); ?>

  <?php echo Form::text('lastname', '',['class' => 'form-control','placeholder' => 'Please Enter Your Last Name']); ?>

</div>
<div class="form-group">
  <?php echo Form::label('email','E-Mail Address'); ?>

  <?php echo Form::text('email', '',['class' => 'form-control','placeholder' => 'Enter Your E-Mail Address']); ?>

</div>
<div class="form-group">
  <?php echo Form::label('message','Message'); ?>

  <?php echo Form::textarea('message', '',['class' => 'form-control','placeholder' => 'Type your message']); ?>

</div>
  <?php echo Form::submit('Submit',['class' => 'btn btn-primary']); ?>

  <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>