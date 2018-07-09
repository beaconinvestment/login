<!DOCTYPE html>
<html>
<head>
    {{--<meta charset="utf-8">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot_password | Beacon Investment</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/forgot.css') }}">
    <!--end of page level css-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="box animation flipInX">
            <img src="{{ asset('assets/images/josh-new.png') }}" alt="logo" class="img-responsive mar">
            <h3 class="text-primary">Your Password</h3>
            {{--<p>Enter your email to reset your password</p>--}}
            <div id="notific">
                @include('notifications')
            </div>
            @if ($passwd  ==  '200')
                <b>Wrong CNIC Entered</b>
                <br>
                Please Try Again?<a href="{{ route('forgot-password') }}"> Click here</a>
            @else
                <b>{{$passwd}}</b>
                <br>
                Back to login page?<a href="{{ route('login') }}"> Click here</a>
            @endif
            {{--@if (is_array($users) || is_object($users))--}}
                {{--@foreach((array)$user as $users)--}}
                    {{--<tbody>--}}
                    {{--<tr>--}}
                        {{--<td>{{$users->cnic}}</td>--}}
                    {{--</tr>--}}
                    {{--</tbody>--}}
                {{--@endforeach--}}
            {{--@endif--}}

            {{--<form action="{{ route('forgot-password') }}" class="omb_loginForm" autocomplete="off" method="POST">--}}
                {{--{!! Form::token() !!}--}}
                {{--<div class="form-group">--}}
                    {{--<tbody>--}}
                        {{--<tr>--}}
                            {{--<td>{{$users->password}}</td>--}}
                        {{--</tr>--}}
                    {{--</tbody>--}}
                {{--</div>--}}
            {{--</form>--}}

        </div>
    </div>
</div>
<!--global js starts-->
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/frontend/forgotpwd_custom.js') }}"></script>
<!--global js end-->
</body>
</html>
