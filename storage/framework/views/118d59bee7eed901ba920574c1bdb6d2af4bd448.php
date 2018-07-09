<?php $__env->startSection('title'); ?>
Payments
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('core-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section class="content-header">
     <h1>Payments Edit</h1>
     <ol class="breadcrumb">
         <li>
             <a href="<?php echo e(route('admin.dashboard')); ?>"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                 Dashboard
             </a>
         </li>
         <li>Payments</li>
         <li class="active">Edit Payment </li>
     </ol>
    </section>
    <section class="content paddingleft_right15">
      <div class="row">
      <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Edit  Payment
                </h4></div>
            <br />
        <div class="panel-body">
        <?php echo Form::model($payment, ['route' => ['admin.payments.update', collect($payment)->first() ], 'method' => 'patch']); ?>


        <?php echo $__env->make('admin.payments.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo Form::close(); ?>

        </div>
      </div>
    </div>
   </section>
 <?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $("form").submit(function() {
                $('input[type=submit]').attr('disabled', 'disabled');
                return true;
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>