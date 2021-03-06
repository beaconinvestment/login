<?php $__env->startSection('title'); ?>
Form Builder
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    
    <link href="<?php echo e(asset('assets/vendors/bootstrap-form-builder/css/custom.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/pages/formbuilder.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="content-header">
            <!--section starts-->
            <h1>Form Builder</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('admin.dashboard')); ?>">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Builders</a>
                </li>
                <li class="active">Form Builder</li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissable visible-xs visible-md">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        May not work properly in touch enabled devices as it as requires drag and drop.
                    </div>
                    <!--form builder-->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="help" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Drag & Drop components
                            </h3>
                            <span class="pull-right">
                                 <i class="glyphicon glyphicon-chevron-up clickable"></i>
                                 <i class="glyphicon glyphicon glyphicon-remove removepanel clickable"></i>
                            </span>
                        </div>
                        <div class="panel-body ">
                            <div class="row clearfix">
                                <!-- Components -->
                                <div class="col-md-7">
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs" id="formtabs">
                                            <!-- Tab nav --> </ul>
                                        <form class="form-horizontal" id="components" role="form">
                                            <fieldset>
                                                <div class="tab-content">
                                                    <!-- Tabs of snippets go here --> </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <!-- / Components -->
                                <!-- Building Form. -->
                                <div class="col-md-5">
                                    <div class="clearfix">
                                        <p class="padding_p">Drag elements here</p>
                                        <hr class="hr-ddd">
                                        <div id="build">
                                            <form id="target" class="form-horizontal"></form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Building Form. --> </div>
                    <!-- / Components --> </div>
                <!--form builder ends--> </div>
        </section>
        <!--main content ends--> 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>

<script data-main="<?php echo e(asset('assets/vendors/bootstrap-form-builder/js/main-built.js')); ?>" src="<?php echo e(asset('assets/vendors/bootstrap-form-builder/js/lib/require.js')); ?>" ></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>