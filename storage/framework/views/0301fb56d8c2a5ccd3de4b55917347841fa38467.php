<?php $__env->startSection('title'); ?>
Booking
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>Booking View</h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(route('admin.dashboard')); ?>"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>Bookings</li>
        <li class="active">Booking View</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
       <div class="panel panel-primary">
        <div class="panel-heading clearfix">
            <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                Booking details
            </h4>
        </div>
            <div class="panel-body">
                <?php echo $__env->make('admin.bookings.show_fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    <div class="form-group">
           <a href="<?php echo route('admin.bookings.index'); ?>" class="btn btn-default">Back</a>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>