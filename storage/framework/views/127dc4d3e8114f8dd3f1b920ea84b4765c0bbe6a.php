<!DOCTYPE html>
<html>
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot_password | Welcome to Beacon Frontend</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link href="<?php echo e(asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')); ?>" rel="stylesheet"/>
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/frontend/forgot.css')); ?>">
    <!--end of page level css-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="box animation flipInX">
            <img src="<?php echo e(asset('assets/images/josh-new.png')); ?>" alt="logo" class="img-responsive mar">
            <h3 class="text-primary">Your Password</h3>
            
            <div id="notific">
                <?php echo $__env->make('notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <?php if($passwd  ==  '200'): ?>
                <b>Wrong CNIC Entered</b>
                <br>
                Please Try Again?<a href="<?php echo e(route('forgot-password')); ?>"> Click here</a>
            <?php else: ?>
                <b><?php echo e($passwd); ?></b>
                <br>
                Back to login page?<a href="<?php echo e(route('login')); ?>"> Click here</a>
            <?php endif; ?>
            
                
                    
                    
                        
                    
                    
                
            

            
                
                
                    
                        
                            
                        
                    
                
            

        </div>
    </div>
</div>
<!--global js starts-->
<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')); ?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/frontend/forgotpwd_custom.js')); ?>"></script>
<!--global js end-->
</body>
</html>
