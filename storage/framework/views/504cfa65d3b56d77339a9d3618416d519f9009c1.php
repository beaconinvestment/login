<!-- Id Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('id', 'ID:'); ?>

    <?php echo Form::text('id', null, ['class' => 'form-control']); ?>

</div>

<!-- User Id Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('user_id', 'User Id:'); ?>

    <?php echo Form::number('user_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Type Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('type', 'Type:'); ?>

    <?php echo Form::text('type', null, ['class' => 'form-control']); ?>

</div>

<!-- Block Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('block', 'Block:'); ?>

    <?php echo Form::text('block', null, ['class' => 'form-control']); ?>

</div>

<!-- Total Price Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('total_price', 'Total Price:'); ?>

    <?php echo Form::number('total_price', null, ['class' => 'form-control']); ?>

</div>

<!-- Size Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('size', 'Size:'); ?>

    <?php echo Form::text('size', null, ['class' => 'form-control']); ?>

</div>

<!-- Booking Date Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('booking_date', 'Booking Date:'); ?>

    <?php echo Form::date('booking_date', null, ['class' => 'form-control']); ?>

</div>

<!-- Total Installments Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('total_installments', 'Total Installments:'); ?>

    <?php echo Form::number('total_installments', null, ['class' => 'form-control']); ?>

</div>

<!-- Installment Amount Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('installment_amount', 'Installment Amount:'); ?>

    <?php echo Form::number('installment_amount', null, ['class' => 'form-control']); ?>

</div>

<!-- Society Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('society', 'Society:'); ?>

    <?php echo Form::text('society', null, ['class' => 'form-control']); ?>

</div>

<!-- Confirmation After Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('confirmation_after', 'Confirmation After:'); ?>

    <?php echo Form::number('confirmation_after', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.bookings.index'); ?>" class="btn btn-default">Cancel</a>
</div>
