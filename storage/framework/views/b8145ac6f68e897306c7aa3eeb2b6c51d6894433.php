<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $payment->id; ?></p>
    <hr>
</div>

<!-- Booking ID Field -->
<div class="form-group">
    <?php echo Form::label('booking_id', 'Booking ID:'); ?>

    <p><?php echo $payment->booking_id; ?></p>
    <hr>
</div>

<!-- Payment Field -->
<div class="form-group">
    <?php echo Form::label('payment', 'Payment:'); ?>

    <p><?php echo $payment->payment; ?></p>
    <hr>
</div>

