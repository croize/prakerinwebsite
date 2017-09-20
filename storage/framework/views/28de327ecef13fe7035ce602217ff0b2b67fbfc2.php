<form class="" action="/score" method="post">
<?php echo e(csrf_field()); ?>

  <?php $__currentLoopData = $c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2><?php echo e($q->question); ?></h2>
      <?php $__currentLoopData = $q->option; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <input type="radio" name="answer_<?php echo e($ans->question_id); ?>" value="<?php echo e($ans->correct); ?>"><?php echo e($ans->option_text); ?><br>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <input type="submit" name="" value="Submit">
</form>
