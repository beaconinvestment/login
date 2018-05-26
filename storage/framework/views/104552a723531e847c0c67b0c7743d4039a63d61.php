<?php $__env->startSection('title'); ?>
Price
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/frontend/price.css')); ?>">
<link href="<?php echo e(asset('assets/vendors/animate/animate.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('top'); ?>
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('home')); ?>"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Price</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="money" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Price
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <h2 id="pricing_tables_title"> PRICING TABLES</h2>
            <!-- Vestibulizzle Section Start -->
            <div class="col-md-3 col-sm-6 wow flipInY" data-wow-duration="3.5s">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="text-white">Vestibulizzle</h3>
                    </div>
                    <div class="panel-body text-center">
                        <div class="box_round_symboll">
                            $19
                        </div>
                        <h4 class="success">Per Month</h4>
                        <ul style="text-align: justify;">
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                        </ul>
                        <a class="btn price-btn" href="#">Sign up
                        </a>
                    </div>
                </div>
            </div>
            <!-- //Vestibulizzle Section End -->
            <!-- Best Package Section Start -->
            <div class="col-md-3 col-sm-6 wow flipInY" data-wow-duration="3s" data-wow-delay="0.7s">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="text-white">Best Package</h3>
                    </div>
                    <div class="panel-body">
                        <div class="box_round_symboll">
                            $25
                        </div>
                        <h4 class="success">Per Month</h4>
                        <ul style="text-align: justify;">
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                        </ul>
                        <a class="btn price-btn" href="#">Sign up </a>
                    </div>
                </div>
            </div>
            <!-- Best Package Section End -->
            <!-- Suscipizzle Section Start -->
            <div class="col-md-3 col-sm-6 wow flipInY" data-wow-duration="3s" data-wow-delay="1.2s">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="text-white">Suscipizzle</h3>
                    </div>
                    <div class="panel-body">
                        <div class="box_round_symboll">
                            $38
                        </div>
                        <h4 class="success">Per Month</h4>
                        <ul style="text-align: justify;">
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                        </ul>
                        <a class="btn price-btn " href="#">
                            Sign up
                        </a>
                    </div>
                </div>
            </div>
            <!-- //Suscipizzle Section End -->
            <!-- Pretium Section Start -->
            <div class="col-md-3 col-sm-6 wow flipInY" data-wow-duration="3s" data-wow-delay="1.6s">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="text-white">Pretium</h3>
                    </div>
                    <div class="panel-body">
                        <div class="box_round_symboll">
                            $42
                        </div>
                        <h4 class="success">Per Month</h4>
                        <ul style="text-align: justify;">
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                        </ul>
                        <a class="btn price-btn" href="#"> Sign up
                        </a>
                    </div>
                </div>
            </div>
            <!-- //Pretium Section End -->
        </div>
    </div>
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <script src="<?php echo e(asset('assets/vendors/wow/js/wow.min.js')); ?>" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function () {
            new WOW().init();
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>