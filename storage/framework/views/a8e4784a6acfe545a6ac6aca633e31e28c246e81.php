<?php $__env->startSection('title'); ?>
Blog
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/frontend/tabbular.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/frontend/blog.css')); ?>">
    <!--end of page level css-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('top'); ?>
    <div class="breadcum">
        <div class="container">
            
                
                    
                    
                
                
                    
                    
                
            
            
                
                
            
        </div>
    </div>
    <?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <!-- Container Section Strat -->
    <div class="container">
        <h2>Blog</h2>
        <div class="row">
            <div class="content">
                <div class="col-md-8">
                    <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <!-- BEGIN FEATURED POST -->
                    <div class="featured-post-wide thumbnail">
                        <?php if($blog->image): ?>
                        <img src="<?php echo e(URL::to('/uploads/blog/'.$blog->image)); ?>" class="img-responsive" alt="Image">
                        <?php endif; ?>
                        <div class="featured-text relative-left">
                            <h3 class="primary"><a href="<?php echo e(URL::to('blogitem/'.$blog->slug)); ?>"><?php echo e($blog->title); ?></a></h3>
                            <p>
                                <?php echo $blog->content; ?>

                            </p>
                            
                                
                                
                                    
                                
                                    
                                
                            
                            
                                
                                    
                                
                                
                                    
                                
                                
                                    
                                
                            
                            <hr>
                            <p class="text-right">
                                <a href="<?php echo e(URL::to('blogitem/'.$blog->slug)); ?>" class="btn btn-primary text-white">Read more</a>
                            </p>
                        </div>
                        <!-- /.featured-text -->
                    </div>
                    <!-- /.featured-post-wide -->
                    <!-- END FEATURED POST -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <h3>No Posts Exists!</h3>
                    <?php endif; ?>
                    <ul class="pager">
                        <?php echo $blogs->render(); ?>

                    </ul>
                </div>
                <!-- /.col-md-8 -->
                <div class="col-md-4">
                    <!-- END POPULAR POST -->
                    <!-- Tabbable-Panel Start -->
                    <h3 class="martop">Tab Widget</h3>
                    <div class="tabbable-panel">
                        <!-- Tabbablw-line Start -->
                        <div class="tabbable-line">
                            <!-- Nav Nav-tabs Start -->
                            <ul class="nav nav-tabs ">
                                <li class="active">
                                    <a href="#tab_default_1" data-toggle="tab">
                                        Popular Posts </a>
                                </li>
                                <li>
                                    <a href="#tab_default_2" data-toggle="tab">
                                        Recent Posts </a>
                                </li>
                            </ul>
                            <!-- //Nav Nav-tabs End -->
                            <!-- Tab-content Start -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_default_1">
                                    <div class="media">
                                        <div class="media-left tab col-sm-6 col-md-12 col-xs-12">
                                            <a href="#">
                                                <img class="media-object img-responsive" src="<?php echo e(asset('assets/images/img_3.jpg')); ?>" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                    <h4 class="text-primary">Jelly-o sesame snaps</h4>
                                    <p>
                                        Extraordinary claims require extraordinary evidence globular star cluster great turbulent clouds dispassionate extraterrestrial observer hearts of the stars. Jean-François Champollion Euclid the sky. 
                                    </p>
                                    <div class="text-right primary marbtm"><a href="#">Read more</a>
                                    </div>
                                    <div class="media">
                                        <div class="media-left tab col-sm-6 col-md-12 col-xs-12">
                                            <a href="#">
                                                <img class="media-object img-responsive" src="<?php echo e(asset('assets/images/img_5.jpg')); ?>" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                    <h4 class="text-primary">Fishing cayenne bisque cayenne</h4>
                                    <p>
                                        The Love Boat soon will be making another run. The Love Boat promises something for everyone. On the most sensational inspirational celebrational Muppetational. This is what we call the Muppet Show.
                                    </p>
                                    <div class="text-right primary"><a href="#">Read more</a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_default_2">
                                    <div class="media">
                                        <div class="media-left media-middle tab col-sm-12 col-xs-12">
                                            <a href="#">
                                                <img class="media-object img-responsive" src="<?php echo e(asset('assets/images/img_5.jpg')); ?>" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                    <h4 class="text-primary">Come along, Pond. Allons-y</h4>
                                    <p>
                                        Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger omero undead survivor dictum mauris.
                                    </p>
                                    <div class="text-right primary marbtm"><a href="#">Read more</a>
                                    </div>
                                    <div class="media">
                                        <div class="media-left tab col-sm-6 col-md-12 col-xs-12">
                                            <a href="#">
                                                <img class="media-object img-responsive" src="<?php echo e(asset('assets/images/img_3.jpg')); ?>" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                    <h4 class="text-primary">Jelly-o sesame snaps</h4>
                                    <p>
                                        Hi mindless mortuis soulless creaturas, imo evil stalking monstra adventus resi dentevil vultus comedat cerebella viventium. Qui animated corpse, cricket bat max brucks terribilem incessu zomby.
                                    </p>
                                    <div class="text-right primary"><a href="#">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <!-- //Tab-content End -->
                        </div>
                        <!-- //Tabbablw-line End -->
                    </div>
                    <!-- Tabbable_panel End -->
                    <div class="the-box recent">
                        <h3 class="small-heading text-center">Recent Comments</h3>
                        <ul class="media-list media-xs media-dotted">
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img src="<?php echo e(asset('assets/images/authors/avatar.jpg')); ?>" class="img-circle img-responsive pull-left" alt="riot">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading primary">
                                                        <a href="#">Elizabeth Owens at Duis autem vel eum iriure dolor in hendrerit in</a>
                                                    </h4>
                                    <p class="date">
                                        <small class="text-danger">2hours ago</small>
                                    </p>
                                    <p class="small">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo
                                    </p>
                                </div>
                            </li>
                            <hr>
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img src="<?php echo e(asset('assets/images/authors/avatar1.jpg')); ?>" class="img-circle img-responsive pull-left" alt="riot">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading primary">
                                                        <a href="#">Harold Chavez at Duis autem vel eum iriure dolor in hendrerit in</a>
                                                    </h4>
                                    <p class="date">
                                        <small class="text-danger">5hours ago</small>
                                    </p>
                                    <p class="small">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo
                                    </p>
                                </div>
                            </li>
                            <hr>
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img src="<?php echo e(asset('assets/images/authors/avatar5.jpg')); ?>" class="img-circle img-responsive pull-left" alt="riot">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading primary">
                                                        <a href="#">Mihaela Cihac at Duis autem vel eum iriure dolor in hendrerit in</a>
                                                    </h4>
                                    <p class="date">
                                        <small class="text-danger">10hours ago</small>
                                    </p>
                                    <p class="small">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                        
                        
                            
                                
                            
                                
                            
                        
                    
                </div>
                <!-- /.col-md-4 -->
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>