<!-- Booking ID Field -->
<div class="form-group col-sm-12">
    {!! Form::label('booking_id', 'Booking ID:') !!}
    {!! Form::number('booking_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Field -->
<div class="form-group col-sm-12">
    {!! Form::label('payment', 'Payment:') !!}
    {!! Form::number('payment', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Date -->
<div class="form-group col-sm-12">
    {!! Form::label('created_at', 'Payment Date:') !!}
    {!! Form::date('created_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.payments.index') !!}" class="btn btn-default">Cancel</a>
</div>
