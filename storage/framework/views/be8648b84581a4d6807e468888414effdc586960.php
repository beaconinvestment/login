<?php $__env->startSection('title'); ?>
    User Account
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>

    
    
    
    
    
    
    


<?php $__env->stopSection(); ?>
<style>
    .full-width{
        display: block !important; /* I added this to see the modal, you don't need this */
    }

    /* Important part */
    .modal-dialog{
        overflow-y: initial !important
    }
    .modal-body{
        height: 450px;
        overflow-y: auto;
    }
</style>

<?php $__env->startSection('content'); ?>
    <hr class="content-header-sep">
    <div class="container">
        <div class="col-lg-12">

            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav  nav-tabs ">
                            <li class="active">
                                <a href="#tab1" data-toggle="tab">
                                    <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    My Profile</a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab">
                                    <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                    Bookings</a>
                            </li>
                            
                            
                            
                            
                            

                        </ul>
                        <div  class="tab-content mar-top">
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                
                                                
                                                

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
                                                                 class="img-responsive" width="250" height="250"/>
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
                                                                    <td><?php echo app('translator')->getFromJson('users/title.ref_by'); ?></td>
                                                                    <td>
                                                                        <?php echo e($user->ref_by); ?>

                                                                    </td>

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
                                        <div class="panel panel-info filterable">
                                            <div class="panel-heading clearfix" style="background-color: #224777; color: white">
                                                <h3 class="panel-title pull-left">
                                                    <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Payment Schedule
                                                </h3>
                                            </div>

                                            <div class="panel-body table-responsive">
                                                <table class="table table-striped" id="rowReorder"
                                                       style="font-size: 95%">
                                                    <thead>
                                                    <tr>
                                                        <th>Sr.no.</th>
                                                        <th>Society Name</th>
                                                        <th>Size</th>
                                                        <th>Total Amount</th>
                                                        <th>Booking Date</th>
                                                        <th>Payment Schedule</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $__currentLoopData = $books->booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index =>$book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($index+1); ?></td>
                                                            <td><?php echo e($book->society); ?></td>
                                                            <td><?php echo e($book->size); ?></td>
                                                            <td><?php echo e($book->total_price); ?></td>
                                                            <td><?php echo e($book->booking_date); ?></td>
                                                            <td>
                                                                <button class="btn btn-block btn-primary " data-toggle="modal" data-href="#full-width"
                                                                        href="#full-width" onclick="showdetail(<?php echo e($book->id); ?>)" style="background-color: #224777">
                                                                    View Payments Schedule
                                                                </button>

                                                                
                                                                
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
        </div>
       
        <div class="modal fade in" id="full-width" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Payment Schedule</h4>
                    </div>
                        <div class="modal-body">
                            <div class="panel-body table-responsive">
                                <table class="table table-striped" style="font-size: 90%; margin: -3% 0 0 0">
                                    <thead>
                                    <tr>
                                        <th style="width: 8%">Sr. No.</th>
                                        <th>Due Date</th>
                                        <th style="width: 20%">Installment Amount</th>
                                        <th>Paid</th>
                                        <th>Balance</th>
                                        <th>Payment Date</th>
                                    </tr>
                                    </thead>
                                </table>
                                <table class="table table-striped" id="table2"  style="font-size: 90%">

                                    
                                    
                                        
                                        
                                        
                                        
                                        
                                        
                                    
                                    
                                    

                                    
                                </table>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>
        
        

        <script>


                function showdetail(b_id) {

                    $.get('/my-account/get_payments?b_id='+b_id, function(data){
                        $("#table2").empty();
                        let var1 = JSON.parse(JSON.stringify(data));
                        var payments = var1[0];
                        var p_date = var1[1];
                        var b_date = var1[2];
                        var confirm_after = var1[3];
                        var i_amounts = var1[4];
                        var t_row = var1[5];
                        var ins_amount = var1[6];
                        // alert(ins_amount);
                        // console.log(JSON.stringify(var2))
                        
                        
                        
                        
                        
                        


                        //Date Function start
                        var d = new Date(b_date);
                        // Month name function
                        var month_name = function(dt){
                            mlist = [ "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC" ];
                            return mlist[dt.getMonth()];
                        };  // Month name function end
                        var month_array = [];
                        var m_ys = "01-"+month_name(d) + "-" + d.getFullYear();
                        month_array[0]= m_ys;

                        //if (confirm_after == 3) {
                        var a = parseInt(confirm_after );
                        d.setMonth(d.getMonth() + a);
                        var m_yss = "01-"+month_name(d) + "-" + d.getFullYear();
                        month_array[1]= m_yss;
                        for (var ii = 2; ii < t_row; ii++) {
                            d.setMonth(d.getMonth() + 3);
                            var objDate = new Date(d);
                            var year = objDate.getFullYear();
                            var m_y = "01-" + month_name(objDate) + "-" + year;
                            month_array.push(m_y);
                        }//Date Function end
                        // }
                        /* else if (confirm_after == 1){
                             d.setMonth(d.getMonth() + 1);
                             var m_yss = "01-"+month_name(d) + "-" + d.getFullYear();
                             month_array[1]= m_yss;
                             for (var ii = 2; ii < t_row; ii++) {
                                 d.setMonth(d.getMonth() + 3);
                                 var objDate = new Date(d);
                                 var year = objDate.getFullYear();
                                 var m_y = "01-" + month_name(objDate) + "-" + year;
                                 month_array.push(m_y);
                             }//Date Function end
                         }
                         else if (confirm_after == 4){
                             d.setMonth(d.getMonth() + 4);
                             var m_yss = "01-"+month_name(d) + "-" + d.getFullYear();
                             month_array[1]= m_yss;
                             for (var ii = 2; ii < t_row; ii++) {
                                 d.setMonth(d.getMonth() + 3);
                                 var objDate = new Date(d);
                                 var year = objDate.getFullYear();
                                 var m_y = "01-" + month_name(objDate) + "-" + year;
                                 month_array.push(m_y);
                             }//Date Function end
                         }*/

                        //Installment Amount Function start
                        // var i_amount = i_amounts;
                        var amount_array = [];
                        amount_array[0]=[i_amounts*10/100];
                        amount_array[1]=[i_amounts*10/100];
                        for (var im=2; im<=t_row; im++){
                            // if (ins_amount[im] !== undefined) {
                            //     amount_array.push(ins_amount[im]);
                            // }else{
                            //     amount_array.push('nil');
                            // }
                             amount_array.push(ins_amount);
                        }//Installment Amount Function end

                        //Payments Function start
                        var payments_array = [];
                        for (var iip = 0; iip < t_row; iip++) {
                            if (payments[iip] !== undefined) {
                                payments_array.push(payments[iip]);
                            }else{
                                payments_array.push('nil');
                            }
                        }//Payments Function end

                        //Payments Date Function start
                        var pay_data_array = [];
                        for (var iiip = 0; iiip < t_row; iiip++) {
                            if (p_date[iiip] !== undefined) {
                                pay_data_array.push(p_date[iiip]);
                            }else{
                                pay_data_array.push('nil');
                            }
                        }//Payments Date Function end

                        //Balance Amount Start
                        var balance_array = [];
                        var balance;
                        for (var iiip = 0; iiip < t_row; iiip++) {
                            if (payments[iiip] !== undefined) {
                                i_amounts -= payments[iiip];
                                balance_array.push(i_amounts);
                            }else{
                                balance_array.push('nil');
                            }
                        }//Balance Amount End


                        // Table Generator
                                
                        for (var p = 0; p<t_row; p++){
                            var array = [[[p+1],month_array[p],amount_array[p],payments_array[p],balance_array[p],pay_data_array[p]]],
                                table = document.getElementById("table2");

                            for (var i=0; i<array.length; i++)
                            {
                                var newRow = table.insertRow(table.length);

                                for (var j=0; j<array[i].length; j++)
                                {
                                    var cell = newRow.insertCell(j);
                                    cell.innerHTML = array[i][j];
                                }
                            }}
                    });

                    }



            // for (var p = 0; p<5; p++){
            //     var array = [[[p+1],'nil','nil','nil','nil','nil']],
            //         table = document.getElementById("table3");
            //
            //     for (var i=0; i<array.length; i++)
            //     {
            //         var newRow = table.insertRow(table.length);
            //
            //         for (var j=0; j<array[i].length; j++)
            //         {
            //             var cell = newRow.insertCell(j);
            //             cell.innerHTML = array[i][j];
            //         }
            //     }}

        </script>
        
        
        
        
        
        
        
        
        
        
        
        
        

        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        

        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        
        
        

        
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        

        

        
        
        
        
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        
        
        
        
        

        
        
        
        
        
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>

    
    
    
    
    
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>