<ul id="menu" class="page-sidebar-menu">

    <li <?php echo (Request::is('admin') ? 'class="active"' : ''); ?>>
        <a href="<?php echo e(route('admin.dashboard')); ?>">
            <i class="livicon" data-name="dashboard" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Dashboard 1</span>
        </a>
    </li>
    <li <?php echo (Request::is('admin/index1') ? 'class="active"' : ''); ?>>
        <a href="<?php echo e(URL::to('admin/index1')); ?>">
            <i class="livicon" data-name="dashboard" data-size="18" data-c="#EF6F6C" data-hc="#EF6F6C"
               data-loop="true"></i>
            Dashboard 2
        </a>
    </li>
    <li <?php echo (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active"' : ''); ?>>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">Users</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php echo (Request::is('admin/users') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/users')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Users
                </a>
            </li>
            <li <?php echo (Request::is('admin/users/create') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/users/create')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Add New User
                </a>
            </li>
            <li <?php echo ((Request::is('admin/users/*')) && !(Request::is('admin/users/create')) ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::route('admin.users.show',Sentinel::getUser()->id)); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    View Profile
                </a>
            </li>
            <li <?php echo (Request::is('admin/deleted_users') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/deleted_users')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Deleted Users
                </a>
            </li>
        </ul>
    </li>
    <?php echo $__env->make('admin/layouts/menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <li <?php echo (Request::is('admin/generator_builder') ? 'class="active"' : ''); ?>>
        <a href="<?php echo e(URL::to('admin/generator_builder')); ?>">
            <i class="livicon" data-name="shield" data-size="18" data-c="#F89A14" data-hc="#F89A14"
               data-loop="true"></i>
            Generator Builder
        </a>
    </li>
    

        
            
               
            
        
    
    
        
            
               
            
        
    
    
        
            
               
            
            
        
        
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
        
    
    
        
            
               
            
            
        
        
            
                
                    
                    
                
            
            
                
                    
                    
                
            
        
    

    
        
            
               
            
            
        
        
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
        
    
    
    
    
    
        
            
               
            
            
        
        
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            

            
                
                    
                    
                
            
            
                
                    
                    
                
            
        
    
    
        
            
               
            
            
        
        
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            

            
                
                    
                    
                
            

            
                
                    
                    
                
            

            
                
                    
                    
                
            

            
                
                    
                    
                
            

            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
        
    
    
        
            
               
            
            
        
        
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
        
    
    
        
            
               
            
            
        
        
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            

            
                
                    
                    
                
            
            
                
                    
                    
                
            
        
    
    
        
            
               
            
            
        
        
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
        
    
    
        
            
               
            
            
        
    
    
        
            
               
            
            
        
        
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
        
    
    
        
            
               
            
            
        
    
    
        
            
               
            
            
        
        
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
        
    

    
        
            
               
            
            
        
        
            
                
                    
                    
                
            
            
                
                    
                    
                
            
        
    
    
        
            
               
            
            
        
        
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
        
    
    <li <?php echo ((Request::is('admin/blogcategory') || Request::is('admin/blogcategory/create') || Request::is('admin/blog') ||  Request::is('admin/blog/create')) || Request::is('admin/blog/*') || Request::is('admin/blogcategory/*') ? 'class="active"' : ''); ?>>
        <a href="#">
            <i class="livicon" data-name="comment" data-c="#F89A14" data-hc="#F89A14" data-size="18"
               data-loop="true"></i>
            <span class="title">Blog</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php echo (Request::is('admin/blogcategory') ? 'class="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/blogcategory')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Blog Category List
                </a>
            </li>
            <li <?php echo (Request::is('admin/blog') ? 'class="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/blog')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Blog List
                </a>
            </li>
            <li <?php echo (Request::is('admin/blog/create') ? 'class="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/blog/create')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Add New Blog
                </a>
            </li>
        </ul>
    </li>
    
        
            
               
            
            
        
        
            
                
                    
                    
                
            
            
                
                    
                    
                
            
        
    
    
        
            
               
            
        
    
    
        
            
               
            
        
    
    
        
            
               
            
            
        
        
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
            
                
                    
                    
                
            
        
    
    <!-- Menus generated by CRUD generator -->

</ul>