<table class="table table-responsive table-striped table-bordered" id="bookings-table" width="100%">
    <thead>
     <tr>
        <th>ID</th>
        <th>User ID</th>
        <th>Type</th>
        <th>Block</th>
        <th>Total Price</th>
        <th>Size</th>
        <th>Booking Date</th>
        <th>Total Installments</th>
        <th>Installment Amount</th>
        <th>Society</th>
        <th>Confirmation After</th>
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $booking->id; ?></td>
            <td><?php echo $booking->user_id; ?></td>
            <td><?php echo $booking->type; ?></td>
            <td><?php echo $booking->block; ?></td>
            <td><?php echo $booking->total_price; ?></td>
            <td><?php echo $booking->size; ?></td>
            <td><?php echo $booking->booking_date; ?></td>
            <td><?php echo $booking->total_installments; ?></td>
            <td><?php echo $booking->installment_amount; ?></td>
            <td><?php echo $booking->society; ?></td>
            <td><?php echo $booking->confirmation_after; ?></td>
            <td>
                 <a href="<?php echo e(route('admin.bookings.show', collect($booking)->first() )); ?>">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view booking"></i>
                 </a>
                 <a href="<?php echo e(route('admin.bookings.edit', collect($booking)->first() )); ?>">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit booking"></i>
                 </a>
                 <a href="<?php echo e(route('admin.bookings.confirm-delete', collect($booking)->first() )); ?>" data-toggle="modal" data-target="#delete_confirm">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete booking"></i>
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
        $('#bookings-table').DataTable({
                      responsive: true,
                      pageLength: 10
                  });
                  $('#bookings-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );

       </script>

<?php $__env->stopSection(); ?>