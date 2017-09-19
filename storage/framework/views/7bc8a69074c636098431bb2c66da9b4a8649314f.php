<?php $__currentLoopData = $c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($yu->title); ?><br>
<?php echo e($yu->desc_pembuka); ?><br>
<?php echo e($yu->peserta); ?><br>
<?php echo e($yu->penyelenggara); ?><br>
<?php echo e($yu->time); ?><br>
<?php echo e($yu->date); ?><br>
<?php echo e($yu->point); ?><br>
<?php echo $yu->desc; ?><br>
<hr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
