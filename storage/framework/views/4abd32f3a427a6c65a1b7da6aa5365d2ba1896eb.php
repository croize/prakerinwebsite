<?php if(Auth::user()->status == 0): ?>
<?php echo $__env->make('user.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
    <p>This is my body content.</p>
<?php $__env->stopSection(); ?>
<?php else: ?>
<?php echo $__env->make('admin.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
    <p>This is my body content.</p>
<?php $__env->stopSection(); ?>
<?php endif; ?>
