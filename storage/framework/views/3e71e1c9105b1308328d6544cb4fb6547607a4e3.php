<?php $__env->startSection('title'); ?>
    View User Details
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <meta name="csrf_token" content="<?php echo e(csrf_token()); ?>">
    <link href="<?php echo e(asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/vendors/x-editable/css/bootstrap-editable.css')); ?>" rel="stylesheet"/>

    <link href="<?php echo e(asset('assets/css/pages/user_profile.css')); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <!--section starts-->
        <h1>User Profile</h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(route('admin.dashboard')); ?>">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Users</a>
            </li>
            <li class="active">User Profile</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav  nav-tabs ">
                    <li class="active">
                        <a href="#tab1" data-toggle="tab">
                            <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i>
                            User Profile</a>
                    </li>
                    <li>
                        <a href="#tab2" data-toggle="tab">
                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Change Password</a>
                    </li>
                    <li>
                        <a href="<?php echo e(URL::to('admin/user_profile')); ?>" >
                            <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Advanced User Profile</a>
                    </li>

                </ul>
                <div  class="tab-content mar-top">
                    <div id="tab1" class="tab-pane fade active in">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">

                                            User Profile
                                        </h3>

                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-4">
                                            <div class="img-file">
                                                <?php if($user->pic): ?>
                                                    <?php if((substr($user->pic, 0,5)) == 'https'): ?>
                                                        <img src="<?php echo e($user->pic); ?>" alt="img" class="img-responsive"/>
                                                    <?php else: ?>
                                                        <img src="<?php echo url('/').'/uploads/users/'.$user->pic; ?>"
                                                             alt="img" class="img-responsive"/>
                                                    <?php endif; ?>
                                                <?php elseif($user->gender === "male"): ?>
                                                    <img src="<?php echo e(asset('assets/images/authors/avatar3.png')); ?>" alt="..."
                                                         class="img-responsive"/>
                                                <?php elseif($user->gender === "female"): ?>
                                                    <img src="<?php echo e(asset('assets/images/authors/avatar5.png')); ?>" alt="..."
                                                         class="img-responsive"/>
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('assets/images/authors/no_avatar.jpg')); ?>" alt="..."
                                                         class="img-responsive"/>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped" id="users">

                                                        <tr>
                                                            <td><?php echo app('translator')->getFromJson('users/title.pword'); ?></td>
                                                            <td>
                                                                <p class="user_name_max"><?php echo e($user->pword); ?></p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->getFromJson('users/title.first_name'); ?></td>
                                                            <td>
                                                                <p class="user_name_max"><?php echo e($user->first_name); ?></p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->getFromJson('users/title.last_name'); ?></td>
                                                            <td>
                                                                <p class="user_name_max"><?php echo e($user->last_name); ?></p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->getFromJson('users/title.cell_no'); ?></td>
                                                            <td>
                                                                <?php echo e($user->cell_no); ?>

                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->getFromJson('users/title.cnic'); ?></td>
                                                            <td>
                                                                <?php echo e($user->cnic); ?>

                                                            </td>

                                                        </tr>
                                                       <tr>
                                                            <td><?php echo app('translator')->getFromJson('users/title.ref_by'); ?></td>
                                                            <td>
                                                                <?php echo e($user->ref_by); ?>

                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->getFromJson('users/title.email'); ?></td>
                                                            <td>
                                                                <?php echo e($user->email); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <?php echo app('translator')->getFromJson('users/title.gender'); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo e($user->gender); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->getFromJson('users/title.dob'); ?></td>

                                                            <?php if($user->dob=='0000-00-00'): ?>
                                                                <td>
                                                                </td>
                                                            <?php else: ?>
                                                                <td>
                                                                    <?php echo e($user->dob); ?>

                                                                </td>
                                                            <?php endif; ?>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->getFromJson('users/title.country'); ?></td>
                                                            <td>
                                                                <?php echo e($user->country); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->getFromJson('users/title.state'); ?></td>
                                                            <td>
                                                                <?php echo e($user->user_state); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->getFromJson('users/title.city'); ?></td>
                                                            <td>
                                                                <?php echo e($user->city); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->getFromJson('users/title.address'); ?></td>
                                                            <td>
                                                                <?php echo e($user->address); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->getFromJson('users/title.postal'); ?></td>
                                                            <td>
                                                                <?php echo e($user->postal); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->getFromJson('users/title.status'); ?></td>
                                                            <td>

                                                                <?php if($user->deleted_at): ?>
                                                                    Deleted
                                                                <?php elseif($activation = Activation::completed($user)): ?>
                                                                    Activated
                                                                <?php else: ?>
                                                                    Pending
                                                                <?php endif; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->getFromJson('users/title.created_at'); ?></td>
                                                            <td>
                                                                <?php echo $user->created_at->diffForHumans(); ?>

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12 pd-top">
                                <form class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <?php echo e(csrf_field()); ?>

                                            <label for="inputpassword" class="col-md-3 control-label">
                                                Password
                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                    <input type="password" id="password" placeholder="Password" name="password"
                                                           class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnumber" class="col-md-3 control-label">
                                                Confirm Password
                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                    <input type="password" id="password-confirm" placeholder="Confirm Password" name="confirm_password"
                                                           class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-primary" id="change-password">Submit
                                            </button>
                                            &nbsp;
                                            <input type="reset" class="btn btn-default" value="Reset"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <!-- Bootstrap WYSIHTML5 -->
    <script  src="<?php echo e(asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')); ?>" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#change-password').click(function (e) {
                e.preventDefault();
                var check = false;
                if ($('#password').val() ===""){
                    alert('Please Enter password');
                }
                else if  ($('#password').val() !== $('#password-confirm').val()) {
                    alert("confirm password should match with password");
                }
                else if  ($('#password').val() === $('#password-confirm').val()) {
                    check = true;
                }

                if(check == true){
                var sendData =  '_token=' + $("input[name='_token']").val() +'&password=' + $('#password').val() +'&id=' + <?php echo e($user->id); ?>;
                    var path = "passwordreset";
                    $.ajax({
                        url: path,
                        type: "post",
                        data: sendData,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                        },
                        success: function (data) {
                            $('#password, #password-confirm').val('');
                            alert('password reset successful');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert('error in password reset');
                        }
                    });
                }
            });
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>