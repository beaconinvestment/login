@extends('admin/layouts/default')

@section('title')
Payment
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" rel="stylesheet"/>
    {{--<link rel="stylesheet" href="https://select2.org/assets/a7be624d756ba99faa354e455aed250d.css">--}}
@stop

@section('content')
@include('core-templates::common.errors')
<section class="content-header">
    <h1>Payment</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>Payments</li>
        <li class="active">Create Payment </li>
    </ol>
</section>
{{--<section class="content paddingleft_right15">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-6">--}}
            {{--<div class="panel panel-primary ">--}}
                {{--<div class="panel-heading">--}}
                    {{--<h4 class="panel-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>--}}
                        {{--Bookings--}}
                    {{--</h4>--}}
                {{--</div>--}}
                {{--<br />--}}
                {{----}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<section class="content paddingleft_right15">
<div class="row">
 <div class="panel panel-primary">

        <div class="panel-heading">
            <h4 class="panel-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                Create New  Payment
            </h4></div>
        <br />
        <div class="panel-body">
                <div class="form-group col-sm-12">
                    <label for="tag_list">Booking Code:</label>
                    <select id="tag_list" name="tag_list" class="form-control" width="100%">
                        <option value=”” disabled selected>Choose Booking Code . . .</option>
                        @foreach($bookings as $key => $booking)
                            <option value="{{$key}}">{{$booking->booking_code}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $booking->id }}</option>
                        @endforeach
                    </select>
                </div>
        {!! Form::open(['route' => 'admin.payments.store']) !!}

            @include('admin.payments.fields')

        {!! Form::close() !!}
    </div>
  </div>
 </div>
</section>
 @stop
@section('footer_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $("form").submit(function() {
                $('input[type=submit]').attr('disabled', 'disabled');
                return true;
            });
        });
    </script>
{{--@stop--}}
{{-- page level scripts --}}
{{--@section('footer_scripts')--}}
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/select2/js/select2.js') }}"></script>
    <script>
        $(document).ready(function () {
           $('#tag_list').select2();
        });
    </script>
@stop