<?php $__env->startPush('stylesheets'); ?>
    <!-- Example -->
    <!--<link href=" <link href="<?php echo e(asset("css/myFile.min.css")); ?>" rel="stylesheet">" rel="stylesheet">-->
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main_container'); ?>

    <!-- page content -->
    <div class="right_col" role="main">
	
    </div>
    <!-- /page content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.blank', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>