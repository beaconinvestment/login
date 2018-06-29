<?php $__env->startSection('title'); ?>
News_Item
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/frontend/news.css')); ?>">
<link href="<?php echo e(asset('assets/vendors/animate/animate.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/frontend/blog.css')); ?>">
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
                    <a href="#">News Item</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="list-ul" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> News Item
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Jelly-o sesame Section Strat -->
            <div class="col-sm-7 col-md-8 wow zoomIn" data-wow-duration="3.5s">
                <div class="col-md-12">
                    <div class="news_item_image thumbnail">
                        <label>
                            <h3 class="primary news_headings"><?php echo e($news->title); ?></h3>
                        </label>
                        <?php if($news->image): ?>
                            <img src="<?php echo e(URL::to('/uploads/news/'.$news->image)); ?>" class="img-responsive" alt="Image">
                        <?php endif; ?>
                        <div class="news_item_text_1">
                            <p>
                                <?php echo $news->content; ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
            <div class="col-sm-5 col-md-4 col-full-width-left">
                <!-- Featured Author Section Start -->
                
                    
                    
                    
                        
                            
                                
                                    
                                
                            
                        
                        
                        
                            
                                
                                    
                                
                            
                        
                        
                        
                            
                                
                                    
                                
                            
                        
                        
                        
                            
                                
                                    
                                
                            
                        
                        
                    
                    
                    
                
                <!-- //Featured Author Section End -->
                <!-- /.the-box .bg-primary .no-border .text-center .no-margin -->
                <!-- Recent Post Section Start -->
                <div class="the-box wow slideInRight" data-wow-duration="1.5s">
                    <h3 class="small-heading more-margin-bottom">Recent News</h3>
                    <ul class="media-list">
                        <?php $__currentLoopData = $recentnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="media">
                                <div class="media-body">
                                    <div class="media-heading">
                                        <a href="#"><h4 class="primary news_headings"><?php echo e($item->title); ?></h4></a>
                                        <h6 class="text-danger"><?php echo date('d-m-Y', strtotime($item->created_at)); ?></h6>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <!-- Recent Post Section End -->
                
                    
                    
                        
                            
                                
                                    
                                
                            
                            
                                
                                
                                
                                
                                
                                
                                
                            
                        
                        
                            
                                
                                    
                                
                            
                            
                                
                                        
                                
                                
                                
                                
                                
                                
                            
                        
                        
                            
                                
                                    
                                
                            
                            
                                
                                
                                
                                
                                
                                
                                
                            
                        
                    
                
                <!-- /.the-box .no-border -->
            </div>
            <!-- //Jelly-o sesame Section End -->
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