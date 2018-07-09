<?php $__env->startSection('title'); ?>
Payments
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>Payments</h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(route('admin.dashboard')); ?>"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Payments</li>
            <li class="active">Payments List</li>
        </ol>
    </section>
<section class="content paddingleft_right15">
    <div class="row">
     <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Payments List
                </h4>
                <div class="pull-right">
                    <a href="<?php echo e(route('admin.payments.create')); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> <?php echo app('translator')->getFromJson('button.create'); ?></a>
                </div>
            </div>
            <br />
            <div class="panel-body table-responsive">
                 <?php echo $__env->make('admin.payments.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>
        </div>
 </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>