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
                                        <i class="livicon" data-name="notebook" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                        Bookings</a>
                                </li>
                                <li>
                                    <a href="#tab3" data-toggle="tab">
                                        <i class="livicon" data-name="notebook" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                        Blogs</a>
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
                                                <div class="container">
                                                    <div class="row margin_right_left">
                                                        <div class="row margin_right_left">
                                                            <div class="col-md-12">
                                                                <!--main content-->
                                                                <div class="position-center">
                                                                    <!-- Notifications -->
                                                                    <div id="notific">
                                                                        @include('notifications')
                                                                    </div>

                                                                    {{--<div>--}}
                                                                        {{--<h3 class="text-primary" id="title">Personal Information </h3>--}}
                                                                    {{--</div>--}}
                                                                    {!! Form::model($user, ['url' => URL::to('my-account'), 'method' => 'put', 'class' => 'form-horizontal','enctype'=>"multipart/form-data"]) !!}

                                                                    {{ csrf_field() }}
                                                                    <div class="form-group {{ $errors->first('pic', 'has-error') }}">
                                                                        <label class="col-md-2 control-label">Avatar:</label>
                                                                        <div class="col-md-10">
                                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                                <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                                                                    @if($user->pic)
                                                                                        @if((substr($user->pic, 0,5)) == 'https')
                                                                                            <img src="{{ $user->pic }}" alt="img"
                                                                                                 class="img-responsive"/>
                                                                                        @else
                                                                                            <img src="{!! url('/').'/uploads/users/'.$user->pic !!}" alt="img"
                                                                                                 class="img-responsive"/>
                                                                                        @endif
                                                                                    @elseif($user->gender === "male")
                                                                                        <img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="..."
                                                                                             class="img-responsive"/>
                                                                                    @elseif($user->gender === "female")
                                                                                        <img src="{{ asset('assets/images/authors/avatar5.png') }}" alt="..."
                                                                                             class="img-responsive"/>
                                                                                    @else
                                                                                        <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="..."
                                                                                             class="img-responsive"/>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                                                <div>
                                                                                    <span class="btn btn-primary btn-file">
                                                                                        <span class="fileinput-new">Select image</span>
                                                                                        <span class="fileinput-exists">Change</span>
                                                                                        <input type="file" name="pic" id="pic" />
                                                                                    </span>
                                                                                    <span class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</span>
                                                                                </div>
                                                                            </div>
                                                                            <span class="help-block">{{ $errors->first('pic', ':message') }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                                                                        <label class="col-lg-2 control-label">
                                                                            First Name:
                                                                            <span class='require'>*</span>
                                                                        </label>
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                                </span>
                                                                                <input type="text" placeholder=" " name="first_name" id="uf-name"
                                                                                       class="form-control" value="{!! old('first_name',$user->first_name) !!}">
                                                                            </div>
                                                                            <span class="help-block">{{ $errors->first('first_name', ':message') }}</span>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                                                                        <label class="col-lg-2 control-label">
                                                                            Last Name:
                                                                            <span class='require'>*</span>
                                                                        </label>
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                                </span>
                                                                                <input type="text" placeholder=" " name="last_name" id="ul-name"
                                                                                       class="form-control"
                                                                                       value="{!! old('last_name',$user->last_name) !!}"></div>
                                                                            <span class="help-block">{{ $errors->first('last_name', ':message') }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                                                        <label class="col-lg-2 control-label">
                                                                            Email:
                                                                            <span class='require'>*</span>
                                                                        </label>
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                                </span>
                                                                                <input type="text" placeholder=" " id="email" name="email" class="form-control"
                                                                                       value="{!! old('email',$user->email) !!}"></div>
                                                                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group {{ $errors->first('cnic', 'has-error') }}">
                                                                        <label class="col-lg-2 control-label">
                                                                            CNIC:
                                                                            <span class='require'>*</span>
                                                                        </label>
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="livicon" data-name="pencil" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                                </span>
                                                                                <input type="text" placeholder="00000-0000000-0" id="cnic" name="cnic" class="form-control"
                                                                                       value="{!! old('cnic',$user->cnic) !!}"></div>
                                                                            <span class="help-block">{{ $errors->first('cnic', ':message') }}</span>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group {{ $errors->first('cell_no', 'has-error') }}">
                                                                        <label class="col-lg-2 control-label">
                                                                            Cell No:
                                                                            <span class='require'>*</span>
                                                                        </label>
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="livicon" data-name="phone" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                                </span>
                                                                                <input type="text" placeholder="Cell No" id="cell_no" name="cell_no" class="form-control"
                                                                                       value="{!! old('cell_no',$user->cell_no) !!}"></div>
                                                                            <span class="help-block">{{ $errors->first('cell_no', ':message') }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group {{ $errors->first('dob', 'has-error') }}">
                                                                        <label class="col-lg-2 control-label">
                                                                            DOB:
                                                                        </label>
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                                </span>
                                                                                @if($user->dob === '')
                                                                                    {!!  Form::text('dob', null, array('id' => 'datepicker','class' => 'form-control'))  !!}
                                                                                @else
                                                                                    {!!  Form::text('dob', old('dob',$user->dob), array('id' => 'datepicker','class' => 'form-control', 'data-date-format'=> 'YYYY-MM-DD'))  !!}
                                                                                @endif
                                                                            </div>
                                                                            <span class="help-block">{{ $errors->first('dob', ':message') }}</span>
                                                                        </div>
                                                                    </div>

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
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}

                                                                    <div class="form-group {{ $errors->first('city', 'has-error') }}">
                                                                        <label class="col-lg-2 control-label" for="city">City:</label>
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                                </span>
                                                                                <input type="text" placeholder=" " id="city" class="form-control" name="city"
                                                                                       value="{!! old('city',$user->city) !!}"/>
                                                                            </div>
                                                                        </div>
                                                                        <span class="help-block">{{ $errors->first('city', ':message') }}</span>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <div class="col-lg-offset-2 col-lg-10">
                                                                            <button class="btn btn-primary" type="submit">Save</button>
                                                                        </div>
                                                                    </div>

                                                                    </form>{{--{!!  Form::close()  !!}--}}

                                                                </div>
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
                                                        <i class="livicon" data-name="list" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Payment Schedule
                                                    </h3>
                                                </div>

                                                <div class="panel-body table-responsive">
                                                    <table class="table table-striped" id="rowReorder"
                                                           style="font-size: 95%">
                                                        <thead>
                                                        <tr>
                                                            <th>Sr.no.</th>
                                                            <th>Reference ID</th>
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
                                                                <td>{{$book->booking_code}}</td>
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
                                {{--Start of Blogs tab --}}
                                <div id="tab3" class="tab-pane fade">
                                    <div class="row">
                                        <div class="content">
                                            <div class="col-md-8">
                                            @forelse ($blogs as $blog)
                                                <!-- BEGIN FEATURED POST -->
                                                    <div class="featured-post-wide thumbnail">
                                                        @if($blog->image)
                                                            <img src="{{ URL::to('/uploads/blog/'.$blog->image)  }}" style="border-radius: 30%; max-width: 200px" class="img-responsive" alt="Image">
                                                        @endif
                                                        <div class="featured-text relative-left">
                                                            <h3 class="primary"><a href="{{ URL::to('blogitem/'.$blog->slug) }}">{{$blog->title}}</a></h3>
                                                            <p>
                                                                {{--{!! $blog->content !!}--}}
                                                                {!!  substr(strip_tags($blog->content), 0, 500) !!}
                                                            </p>
                                                            <p>
                                                                <strong>Tags: </strong>
                                                                @forelse($blog->tags as $tag)
                                                                    <a href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}">{{ $tag }}</a>,
                                                                @empty
                                                                    No Tags
                                                                @endforelse
                                                            </p>
                                                            <p class="additional-post-wrap">
                                                                <span class="additional-post">
                                                                    <i class="livicon" data-name="user" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i> by&nbsp;<a href="#">{{$blog->author->first_name . ' ' . $blog->author->last_name}}</a>
                                                                </span>
                                                                                            <span class="additional-post">
                                                                    <i class="livicon" data-name="clock" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i><a href="#"> {{$blog->created_at->diffForHumans()}}</a>
                                                                </span>
                                                                                            <span class="additional-post">
                                                                    <i class="livicon" data-name="comment" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i><a href="#"> {{$blog->comments->count()}} comments</a>
                                                                </span>
                                                            </p>
                                                            <hr>
                                                            <p class="text-right">
                                                                <a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="btn btn-primary text-white">Read more</a>
                                                            </p>
                                                        </div>
                                                        <!-- /.featured-text -->
                                                    </div>
                                                    <!-- /.featured-post-wide -->
                                                    <!-- END FEATURED POST -->
                                                @empty
                                                    <h3>No Posts Exists!</h3>
                                                @endforelse
                                                {{--<ul class="pager">--}}
                                                    {{--{!! $blogs->render() !!}--}}
                                                {{--</ul>--}}
                                            </div>
                                            <!-- /.col-md-8 -->
                                            {{--<div class="col-md-4">--}}
                                                {{--<!-- END POPULAR POST -->--}}
                                                {{--<!-- Tabbable-Panel Start -->--}}
                                                {{--<h3 class="martop">Recent Blogs</h3>--}}
                                                {{--<div class="tabbable-panel">--}}
                                                    {{--<!-- Tabbablw-line Start -->--}}
                                                    {{--<div class="tabbable-line">--}}
                                                        {{--<!-- Nav Nav-tabs Start -->--}}
                                                        {{--<ul class="nav nav-tabs ">--}}
                                                            {{--<li class="active">--}}
                                                                {{--<a href="#tab_default_1" data-toggle="tab">--}}
                                                                    {{--Popular Posts </a>--}}
                                                            {{--</li>--}}
                                                            {{--<li>--}}
                                                                {{--<a href="#tab_default_2" data-toggle="tab">--}}
                                                                    {{--Recent Posts </a>--}}
                                                            {{--</li>--}}
                                                        {{--</ul>--}}
                                                        {{--<!-- //Nav Nav-tabs End -->--}}
                                                        {{--<!-- Tab-content Start -->--}}
                                                        {{--<div class="tab-content">--}}
                                                            {{--<div class="tab-pane active" id="tab_default_1">--}}
                                                                {{--<div class="media">--}}
                                                                    {{--<div class="media-left media-middle tab col-sm-12 col-xs-12">--}}
                                                                        {{--@foreach($populars as $popular)--}}
                                                                            {{--<a href="{{ URL::to('blogitem/'.$popular->slug) }}">--}}
                                                                                {{--<a href="#">--}}
                                                                                    {{--@if($blog->image)--}}
                                                                                        {{--<img src="{{ URL::to('/uploads/blog/'.$popular->image)  }}" class="img-responsive" alt="Image">--}}
                                                                                    {{--@endif--}}
                                                                                {{--</a>--}}
                                                                            {{--</a>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<h4 class="text-primary">{!! $popular->title !!}</h4>--}}
                                                                {{--<p>--}}
                                                                    {{--{!! $popular->content !!}--}}
                                                                {{--</p>--}}
                                                                {{--<div class="text-right primary marbtm"><a href="{{ URL::to('blogitem/'.$popular->slug) }}">Read more</a>--}}
                                                                {{--</div>--}}
                                                                {{--@endforeach--}}
                                                            {{--</div>--}}
                                                            {{--<div class="tab-pane" id="tab_default_2">--}}
                                                                {{--<div class="media">--}}
                                                                    {{--<div class="media-left media-middle tab col-sm-12 col-xs-12">--}}
                                                                        {{--@foreach($recents as $recent)--}}
                                                                            {{--<a href="{{ URL::to('blogitem/'.$recent->slug) }}">--}}
                                                                                {{--<a href="#">--}}
                                                                                    {{--@if($blog->image)--}}
                                                                                        {{--<img src="{{ URL::to('/uploads/blog/'.$recent->image)  }}" class="img-responsive" alt="Image">--}}
                                                                                    {{--@endif--}}
                                                                                {{--</a>--}}
                                                                            {{--</a>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<h4 class="text-primary">{!! $recent->title !!}</h4>--}}
                                                                {{--<p>--}}
                                                                    {{--{!! $recent->content !!}--}}
                                                                {{--</p>--}}
                                                                {{--<div class="text-right primary marbtm"><a href="{{ URL::to('blogitem/'.$recent->slug) }}">Read more</a>--}}
                                                                {{--</div>--}}
                                                                {{--@endforeach--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- //Tab-content End -->--}}
                                                    {{--</div>--}}
                                                    {{--<!-- //Tabbablw-line End -->--}}
                                                {{--</div>--}}
                                                {{--<!-- Tabbable_panel End -->--}}
                                                {{--<div class="the-box recent">--}}
                                                {{--<h3 class="small-heading text-center">Recent Comments</h3>--}}
                                                {{--<ul class="media-list media-xs media-dotted">--}}
                                                {{--<li class="media">--}}
                                                {{--<a class="pull-left" href="#">--}}
                                                {{--<img src="{{ asset('assets/images/authors/avatar.jpg') }}" class="img-circle img-responsive pull-left" alt="riot">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                {{--<h4 class="media-heading primary">--}}
                                                {{--<a href="#">Elizabeth Owens at Duis autem vel eum iriure dolor in hendrerit in</a>--}}
                                                {{--</h4>--}}
                                                {{--<p class="date">--}}
                                                {{--<small class="text-danger">2hours ago</small>--}}
                                                {{--</p>--}}
                                                {{--<p class="small">--}}
                                                {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo--}}
                                                {{--</p>--}}
                                                {{--</div>--}}
                                                {{--</li>--}}
                                                {{--<hr>--}}
                                                {{--<li class="media">--}}
                                                {{--<a class="pull-left" href="#">--}}
                                                {{--<img src="{{ asset('assets/images/authors/avatar1.jpg') }}" class="img-circle img-responsive pull-left" alt="riot">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                {{--<h4 class="media-heading primary">--}}
                                                {{--<a href="#">Harold Chavez at Duis autem vel eum iriure dolor in hendrerit in</a>--}}
                                                {{--</h4>--}}
                                                {{--<p class="date">--}}
                                                {{--<small class="text-danger">5hours ago</small>--}}
                                                {{--</p>--}}
                                                {{--<p class="small">--}}
                                                {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo--}}
                                                {{--</p>--}}
                                                {{--</div>--}}
                                                {{--</li>--}}
                                                {{--<hr>--}}
                                                {{--<li class="media">--}}
                                                {{--<a class="pull-left" href="#">--}}
                                                {{--<img src="{{ asset('assets/images/authors/avatar5.jpg') }}" class="img-circle img-responsive pull-left" alt="riot">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                {{--<h4 class="media-heading primary">--}}
                                                {{--<a href="#">Mihaela Cihac at Duis autem vel eum iriure dolor in hendrerit in</a>--}}
                                                {{--</h4>--}}
                                                {{--<p class="date">--}}
                                                {{--<small class="text-danger">10hours ago</small>--}}
                                                {{--</p>--}}
                                                {{--<p class="small">--}}
                                                {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo--}}
                                                {{--</p>--}}
                                                {{--</div>--}}
                                                {{--</li>--}}
                                                {{--</ul>--}}
                                                {{--</div>--}}
                                                {{--<div class="thumbnail">--}}
                                                    {{--<h3>Tags</h3>--}}
                                                    {{--<div class="primary text-center">--}}
                                                        {{--@forelse($tags as $tag)--}}
                                                            {{--<a href="{{ URL::to('blog/'.$tag.'/tag') }}">{{ $tag }}</a>,--}}
                                                        {{--@empty--}}
                                                            {{--No Tags--}}
                                                        {{--@endforelse--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            <!-- /.col-md-4 -->
                                        </div>
                                    </div>
                                </div>
                                {{--End of Blogs tab --}}
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
                            {{--<h5 style=" margin: 0 0 0 2%"><strong>{{"REF ID: ".$book->booking_code}}</strong></h5>--}}
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

            </script>
        </div>

    @stop

    @section('footer_scripts')

        {{--<script type="text/javascript" src="{{ asset('assets/vendors/moment/js/moment.min.js') }}"></script>--}}
        {{--<script type="text/javascript" src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>--}}
        {{--<script type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>--}}
        {{--<script type="text/javascript" src="{{ asset('assets/vendors/select2/js/select2.js') }}"></script>--}}
        {{--<script type="text/javascript" src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>--}}
        {{--<script type="text/javascript" src="{{ asset('assets/js/frontend/user_account.js') }}"></script>--}}

    @stop