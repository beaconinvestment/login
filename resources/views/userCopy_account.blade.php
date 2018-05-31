@extends('layouts.default')

{{-- Page title --}}
@section('title')
User Account
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

{{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/minimal/blue.css') }}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/select2/css/select2.min.css') }}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">--}}
{{--    <link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>--}}
{{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/user_account.css') }}">--}}


@stop
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
{{-- Page content --}}
@section('content')
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
                                            {{--<h3 class="panel-title">--}}
                                                {{--User Profile--}}
                                                {{--</h3>--}}

                                        </div>
                                        <div class="panel-body">
                                            <div class="col-md-4">
                                                <div class="img-file">
                                                    @if($user->pic)
                                                    @if((substr($user->pic, 0,5)) == 'https')
                                                    <img src="{{ $user->pic }}" alt="img" class="img-responsive"/>
                                                    @else
                                                    <img src="{!! url('/').'/uploads/users/'.$user->pic !!}"
                                                         alt="img" class="img-responsive"/>
                                                    @endif
                                                    @elseif($user->gender === "male")
                                                    <img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="..."
                                                         class="img-responsive" width="250" height="250"/>
                                                    @elseif($user->gender === "female")
                                                    <img src="{{ asset('assets/images/authors/avatar5.png') }}" alt="..."
                                                         class="img-responsive"/>
                                                    @else
                                                    <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="..."
                                                         class="img-responsive"/>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped" id="users">

                                                            <tr>
                                                                <td>@lang('users/title.first_name')</td>
                                                                <td>
                                                                    <p class="user_name_max">{{ $user->first_name }}</p>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>@lang('users/title.last_name')</td>
                                                                <td>
                                                                    <p class="user_name_max">{{ $user->last_name }}</p>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>@lang('users/title.cell_no')</td>
                                                                <td>
                                                                    {{ $user->cell_no }}
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>@lang('users/title.cnic')</td>
                                                                <td>
                                                                    {{ $user->cnic }}
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>@lang('users/title.email')</td>
                                                                <td>
                                                                    {{ $user->email }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    @lang('users/title.gender')
                                                                </td>
                                                                <td>
                                                                    {{ $user->gender }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>@lang('users/title.dob')</td>

                                                                @if($user->dob=='0000-00-00')
                                                                <td>
                                                                </td>
                                                                @else
                                                                <td>
                                                                    {{ $user->dob }}
                                                                </td>
                                                                @endif
                                                            </tr>
                                                            {{--<tr>--}}
                                                                {{--<td>@lang('users/title.ref_by')</td>--}}
                                                                {{--<td>--}}
                                                                    {{--{{ $user->ref_by }}--}}
                                                                    {{--</td>--}}

                                                                {{--</tr>--}}
                                                            <tr>
                                                                <td>@lang('users/title.country')</td>
                                                                <td>
                                                                    {{ $user->country }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>@lang('users/title.state')</td>
                                                                <td>
                                                                    {{ $user->user_state }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>@lang('users/title.city')</td>
                                                                <td>
                                                                    {{ $user->city }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>@lang('users/title.address')</td>
                                                                <td>
                                                                    {{ $user->address }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>@lang('users/title.postal')</td>
                                                                <td>
                                                                    {{ $user->postal }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>@lang('users/title.status')</td>
                                                                <td>

                                                                    @if($user->deleted_at)
                                                                    Deleted
                                                                    @elseif($activation = Activation::completed($user))
                                                                    Activated
                                                                    @else
                                                                    Pending
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>@lang('users/title.created_at')</td>
                                                                <td>
                                                                    {!! $user->created_at->diffForHumans() !!}
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
                        {{--Start of Booking tab--}}
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
                                                @foreach($books->booking as $index =>$book)
                                                <tr>
                                                    <td>{{$index+1}}</td>
                                                    <td>{{$book->society}}</td>
                                                    <td>{{$book->size}}</td>
                                                    <td>{{$book->total_price}}</td>
                                                    <td>{{$book->booking_date}}</td>
                                                    <td>
                                                        <button class="btn btn-block btn-primary " data-toggle="modal" data-href="#full-width"
                                                                href="#full-width" onclick="showdetail({{$book->id}})" style="background-color: #224777">
                                                            View Payments Schedule
                                                        </button>

                                                        {{--<a class="btn btn-primary btn-info btn-large" data-toggle="modal"--}}
                                                               {{--data-href="#full-width" href="#full-width">View</a>--}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{--End of Booking tab --}}
                    </div>
                </div>
            </div>
    </div>
    {{--Start of Payment Schedule Model--}}
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

                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th style="width: 8%">Sr. No.</th>--}}
                                {{--<th>Due Date</th>--}}
                                {{--<th>Installment Amount</th>--}}
                                {{--<th>Paid</th>--}}
                                {{--<th>Balance</th>--}}
                                {{--<th>Payment Date</th>--}}
                                {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody class="table-hover">--}}

                            {{--</tbody>--}}
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                </div>
            </div>
        </div>
    </div>
    {{--End of Payment Schedule Model--}}
    {{--</section>--}}

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
                {{--var b_date = {!! json_encode($b_date) !!};--}}
                {{--var t_row = {!! json_encode($t_rows) !!};--}}
                {{--var i_amounts = {!! json_encode($i_amount) !!};--}}
                {{--var payments = {!! json_encode($payments) !!};--}}
                {{--var p_date = {!! json_encode($p_date) !!};--}}
                {{--var confirm_after = {!! json_encode($confirm_after) !!};--}}


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
                {{--var t_row = {!! ($t_rows) !!};--}}
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
    {{--<div class="welcome">--}}
        {{--<h3>My Account</h3>--}}
        {{--</div>--}}
    {{--<hr>--}}
    {{--<div class="row margin_right_left">--}}
        {{--<div class="row margin_right_left">--}}
            {{--<div class="col-md-12">--}}
                <!--main content-->
                {{--<div class="position-center">--}}
                    <!-- Notifications -->
                    {{--<div id="notific">--}}
                        {{--@include('notifications')--}}
                        {{--</div>--}}

                    {{--<div>--}}
                        {{--<h3 class="text-primary" id="title">Personal Information </h3>--}}
                        {{--</div>--}}
                    {{--{!! Form::model($user, ['url' => URL::to('my-account'), 'method' => 'put', 'class' => 'form-horizontal','enctype'=>"multipart/form-data"]) !!}--}}

                    {{--{{ csrf_field() }}--}}
                    {{--<div class="form-group {{ $errors->first('pic', 'has-error') }}">--}}
                        {{--<label class="col-md-2 control-label">Avatar:</label>--}}
                        {{--<div class="col-md-10">--}}
                            {{--<div class="fileinput fileinput-new" data-provides="fileinput">--}}
                                {{--<div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">--}}
                                    {{--@if($user->pic)--}}
                                    {{--@if((substr($user->pic, 0,5)) == 'https')--}}
                                    {{--<img src="{{ $user->pic }}" alt="img"--}}
                                             {{--class="img-responsive"/>--}}
                                    {{--@else--}}
                                    {{--<img src="{!! url('/').'/uploads/users/'.$user->pic !!}" alt="img"--}}
                                             {{--class="img-responsive"/>--}}
                                    {{--@endif--}}
                                    {{--@elseif($user->gender === "male")--}}
                                    {{--<img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="..."--}}
                                             {{--class="img-responsive"/>--}}
                                    {{--@elseif($user->gender === "female")--}}
                                    {{--<img src="{{ asset('assets/images/authors/avatar5.png') }}" alt="..."--}}
                                             {{--class="img-responsive"/>--}}
                                    {{--@else--}}
                                    {{--<img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="..."--}}
                                             {{--class="img-responsive"/>--}}
                                    {{--@endif--}}
                                    {{--</div>--}}
                                {{--<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>--}}
                                {{--<div>--}}
                                    {{--<span class="btn btn-primary btn-file">--}}
        {{--<span class="fileinput-new">Select image</span>--}}
        {{--<span class="fileinput-exists">Change</span>--}}
        {{--<input type="file" name="pic" id="pic" />--}}
        {{--</span>--}}
                                    {{--<span class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--<span class="help-block">{{ $errors->first('pic', ':message') }}</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--<div class="form-group {{ $errors->first('first_name', 'has-error') }}">--}}
                        {{--<label class="col-lg-2 control-label">--}}
                            {{--First Name:--}}
                            {{--<span class='require'>*</span>--}}
                            {{--</label>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="input-group">--}}
                                {{--<span class="input-group-addon">--}}
        {{--<i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>--}}
        {{--</span>--}}
                                {{--<input type="text" placeholder=" " name="first_name" id="uf-name"--}}
                                           {{--class="form-control" value="{!! old('first_name',$user->first_name) !!}">--}}
                                {{--</div>--}}
                            {{--<span class="help-block">{{ $errors->first('first_name', ':message') }}</span>--}}
                            {{--</div>--}}

                        {{--</div>--}}

                    {{--<div class="form-group {{ $errors->first('last_name', 'has-error') }}">--}}
                        {{--<label class="col-lg-2 control-label">--}}
                            {{--Last Name:--}}
                            {{--<span class='require'>*</span>--}}
                            {{--</label>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="input-group">--}}
                                {{--<span class="input-group-addon">--}}
        {{--<i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>--}}
        {{--</span>--}}
                                {{--<input type="text" placeholder=" " name="last_name" id="ul-name"--}}
                                           {{--class="form-control"--}}
                                           {{--value="{!! old('last_name',$user->last_name) !!}"></div>--}}
                            {{--<span class="help-block">{{ $errors->first('last_name', ':message') }}</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--<div class="form-group {{ $errors->first('email', 'has-error') }}">--}}
                        {{--<label class="col-lg-2 control-label">--}}
                            {{--Email:--}}
                            {{--<span class='require'>*</span>--}}
                            {{--</label>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="input-group">--}}
                                {{--<span class="input-group-addon">--}}
        {{--<i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>--}}
        {{--</span>--}}
                                {{--<input type="text" placeholder=" " id="email" name="email" class="form-control"--}}
                                           {{--value="{!! old('email',$user->email) !!}"></div>--}}
                            {{--<span class="help-block">{{ $errors->first('email', ':message') }}</span>--}}
                            {{--</div>--}}

                        {{--</div>--}}

                    {{--<div class="form-group {{ $errors->first('password', 'has-error') }}">--}}
                        {{--<p class="text-warning col-md-offset-2"><strong>If you don't want to change password... please leave them empty</strong></p>--}}
                        {{--<label class="col-lg-2 control-label">--}}
                            {{--Password:--}}
                            {{--<span class='require'>*</span>--}}
                            {{--</label>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="input-group">--}}
                                {{--<span class="input-group-addon">--}}
        {{--<i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>--}}
        {{--</span>--}}
                                {{--<input type="password" name="password" placeholder=" " id="pwd" class="form-control"></div>--}}
                            {{--<span class="help-block">{{ $errors->first('password', ':message') }}</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--<div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">--}}
                        {{--<label class="col-lg-2 control-label">--}}
                            {{--Confirm Password:--}}
                            {{--<span class='require'>*</span>--}}
                            {{--</label>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="input-group">--}}
                                {{--<span class="input-group-addon">--}}
        {{--<i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>--}}
        {{--</span>--}}
                                {{--<input type="password" name="password_confirm" placeholder=" " id="cpwd" class="form-control"></div>--}}
                            {{--<span class="help-block">{{ $errors->first('password_confirm', ':message') }}</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label class="col-lg-2 control-label">Gender: </label>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="radio">--}}
                                {{--<label>--}}
                                    {{--<input type="radio" name="gender" value="male" @if($user->gender === "male") checked="checked" @endif />--}}
                                    {{--Male--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--<div class="radio">--}}
                                {{--<label>--}}
                                    {{--<input type="radio" name="gender" value="female" @if($user->gender === "female") checked="checked" @endif />--}}
                                    {{--Female--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--<div class="radio">--}}
                                {{--<label>--}}
                                    {{--<input type="radio" name="gender" value="other" @if($user->gender === "other") checked="checked" @endif />--}}
                                    {{--Other--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--<div class="form-group  {{ $errors->first('bio', 'has-error') }}">--}}
                        {{--<label for="" class="col-lg-2 control-label">Bio <small>(brief intro):</small></label>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<textarea name="bio" id="bio" class="form-control resize_vertical"--}}
                                          {{--rows="4">{!! old('bio', $user->bio) !!}</textarea>--}}
                            {{--</div>--}}
                        {{--{!! $errors->first('bio', '<span class="help-block">:message</span>') !!}--}}
                        {{--</div>--}}

                    {{--<div>--}}
                        {{--<h3 class="text-primary" id="title">Contact: </h3>--}}
                        {{--</div>--}}

                    {{--<div class="form-group {{ $errors->first('address', 'has-error') }}">--}}
                        {{--<label class="col-lg-2 control-label">--}}
                            {{--Address:--}}
                            {{--</label>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<textarea rows="5" cols="30" class="form-control resize_vertical" id="add1"--}}
                                          {{--name="address">{!! old('address',$user->address) !!}</textarea>--}}
                            {{--</div>--}}
                        {{--<span class="help-block">{{ $errors->first('address', ':message') }}</span>--}}
                        {{--</div>--}}

                    {{--<div class="form-group {{ $errors->first('country', 'has-error') }}">--}}
                        {{--<label class="control-label  col-lg-2">Select Country: </label>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--{!! Form::select('country', $countries, $user->country,['class' => 'form-control select2', 'id' => 'countries']) !!}--}}
                            {{--<span class="help-block">{{ $errors->first('country', ':message') }}</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--<div class="form-group {{ $errors->first('user_state', 'has-error') }}">--}}
                        {{--<label class="col-lg-2 control-label" for="user_state">State:</label>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="input-group">--}}
                                {{--<span class="input-group-addon">--}}
        {{--<i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>--}}
        {{--</span>--}}
                                {{--<input type="text" placeholder=" " id="user_state" class="form-control"--}}
                                           {{--name="user_state"--}}
                                           {{--value="{!! ($user->user_state) !!}"/>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--<span class="help-block">{{ $errors->first('user_state', ':message') }}</span>--}}

                        {{--</div>--}}

                    {{--<div class="form-group {{ $errors->first('city', 'has-error') }}">--}}
                        {{--<label class="col-lg-2 control-label" for="city">City:</label>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="input-group">--}}
                                {{--<span class="input-group-addon">--}}
        {{--<i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>--}}
        {{--</span>--}}
                                {{--<input type="text" placeholder=" " id="city" class="form-control" name="city"--}}
                                           {{--value="{!! old('city',$user->city) !!}"/>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--<span class="help-block">{{ $errors->first('city', ':message') }}</span>--}}
                        {{--</div>--}}

                    {{--<div class="form-group {{ $errors->first('postal', 'has-error') }}">--}}
                        {{--<label class="col-lg-2 control-label" for="postal">Postal:</label>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="input-group">--}}
                                {{--<span class="input-group-addon">--}}
        {{--<i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>--}}
        {{--</span>--}}
                                {{--<input type="text" placeholder=" " id="postal" class="form-control"--}}
                                           {{--name="postal" value="{!! old('postal',$user->postal) !!}"/>--}}
                                {{--</div>--}}
                            {{--<span class="help-block">{{ $errors->first('postal', ':message') }}</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--<div class="form-group {{ $errors->first('dob', 'has-error') }}">--}}
                        {{--<label class="col-lg-2 control-label">--}}
                            {{--DOB:--}}
                            {{--</label>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="input-group">--}}
                                {{--<span class="input-group-addon">--}}
        {{--<i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>--}}
        {{--</span>--}}
                                {{--                                        @if($user->dob === "0000-00-00")--}}
                                {{--                                            {!!  Form::text('dob', '', array('id' => 'datepicker','class' => 'form-control'))  !!}--}}
                                {{--@if($user->dob === '')--}}
                                {{--{!!  Form::text('dob', null, array('id' => 'datepicker','class' => 'form-control'))  !!}--}}
                                {{--@else--}}
                                {{--{!!  Form::text('dob', old('dob',$user->dob), array('id' => 'datepicker','class' => 'form-control', 'data-date-format'=> 'YYYY-MM-DD'))  !!}--}}
                                {{--@endif--}}
                                {{--</div>--}}
                            {{--<span class="help-block">{{ $errors->first('dob', ':message') }}</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<div class="col-lg-offset-2 col-lg-10">--}}
                            {{--<button class="btn btn-primary" type="submit">Save</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</form>--}}{{--{!!  Form::close()  !!}--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
</div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

{{--<script type="text/javascript" src="{{ asset('assets/vendors/moment/js/moment.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('assets/vendors/select2/js/select2.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('assets/js/frontend/user_account.js') }}"></script>--}}

@stop
