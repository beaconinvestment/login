<!-- Booking ID Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('booking_id', 'Booking ID:'); ?>

    <?php echo Form::number('booking_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Payment Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('payment', 'Payment:'); ?>

    <?php echo Form::number('payment', null, ['class' => 'form-control']); ?>

</div>

<!-- Payment Date -->
<div class="form-group col-sm-12">
    <?php echo Form::label('created_at', 'Payment Date:'); ?>

    <?php echo Form::date('created_at', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.payments.index'); ?>" class="btn btn-default">Cancel</a>
</div>
