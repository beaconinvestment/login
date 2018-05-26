<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $payment->id !!}</p>
    <hr>
</div>

<!-- Booking ID Field -->
<div class="form-group">
    {!! Form::label('booking_id', 'Booking ID:') !!}
    <p>{!! $payment->booking_id !!}</p>
    <hr>
</div>

<!-- Payment Field -->
<div class="form-group">
    {!! Form::label('payment', 'Payment:') !!}
    <p>{!! $payment->payment !!}</p>
    <hr>
</div>

