<table class="table table-responsive table-striped table-bordered" id="payments-table" width="100%">
    <thead>
     <tr>
        <th>Booking Id</th>
        <th>Payment</th>
        <th>Payment Date</th>
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $payment->booking_id; ?></td>
            <td><?php echo $payment->payment; ?></td>
            <td><?php echo $payment->created_at; ?></td>
            <td>
                 <a href="<?php echo e(route('admin.payments.show', collect($payment)->first() )); ?>">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view payment"></i>
                 </a>
                 <a href="<?php echo e(route('admin.payments.edit', collect($payment)->first() )); ?>">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit payment"></i>
                 </a>
                 <a href="<?php echo e(route('admin.payments.confirm-delete', collect($payment)->first() )); ?>" data-toggle="modal" data-target="#delete_confirm">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete payment"></i>
                 </a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->startSection('footer_scripts'); ?>

    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/datatables/css/buttons.bootstrap.css')); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/datatables/css/dataTables.bootstrap.css')); ?>"/>
 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/datatables/css/buttons.bootstrap.css')); ?>">
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/datatables/js/jquery.dataTables.js')); ?>" ></script>
 <script type="text/javascript" src="<?php echo e(asset('assets/vendors/datatables/js/dataTables.bootstrap.js')); ?>" ></script>

    <script>
        $('#payments-table').DataTable({
                      responsive: true,
                      pageLength: 10
                  });
                  $('#payments-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
       </script>

<?php $__env->stopSection(); ?>