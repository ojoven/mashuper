<?php $__env->startSection('title', 'Create Mashup'); ?>

<?php $__env->startSection('content'); ?>

<div class="separator">&nbsp;</div>
<h1>Mashup</h1>

<div class="span8">
    <h3 class="quick-title">Create mashup</h3>
</div>

<?php echo $__env->make('partials.create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>