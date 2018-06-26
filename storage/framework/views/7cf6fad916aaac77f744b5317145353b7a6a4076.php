<?php $__env->startSection('title'); ?>
    Charts
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <!--section starts-->
        <h1>Flot Charts</h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(route('admin.dashboard')); ?>">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Charts</a>
            </li>
            <li class="active">Advanced Charts</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Google bar chart
                        </h3>
                        <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <?php echo $google->html(); ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- Stack charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Database Chart
                        </h3>
                        <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <div class="app">

                            <?php echo $db_chart->html(); ?>


                        </div>
                        <!-- End Of Main Application -->

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Bar Chart
                        </h3>
                        <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <?php echo $multi_db->html(); ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Pie chart
                        </h3>
                        <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <?php echo $group_chart->html(); ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Area Chart
                        </h3>
                        <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <?php echo $area->html(); ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Line Chart
                        </h3>
                        <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <?php echo $material->html(); ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Donut Chart
                        </h3>
                        <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <?php echo $donut->html(); ?>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- content -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <?php echo Charts::scripts(); ?>

    <?php echo $db_chart->script(); ?>

    <?php echo $multi_db->script(); ?>

    <?php echo $group_chart->script(); ?>

    <?php echo $material->script(); ?>

    <?php echo $google->script(); ?>

    <?php echo $area->script(); ?>

    <?php echo $donut->script(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>