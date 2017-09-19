<?php echo e($i->question->question); ?>

<?php $__currentLoopData = $w; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<br>
A .<?php echo e($i->option_text); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
