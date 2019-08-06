@extends('front-end.master')
@section('title')
    Registration
@endsection
@section('body')
    <!--banner-->
    <div class="banner1">
        <div class="container">
            <h3><a href="{{ asset('/') }}">Home</a> / <span>Registered</span></h3>
        </div>
    </div>
    <!--banner-->

    <!--content-->

    <div class="container">
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign Up</div>
                    {{-- <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div> --}}
                </div>
                <div class="panel-body" >
                    {{ Form::open(['route'=>'customer-sign-up','id'=>"signupform", 'method'=>'POST', 'class'=>'form-horizontal','role'=>"form"]) }}
                    {{--<form id="signupform" class="form-horizontal" role="form">--}}

                        <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p>Error:</p>
                            <span></span>
                        </div>


                        <div class="form-group">
                            <label for="firstName" class="col-md-3 control-label">First Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="firstName" placeholder="First Name">
                                <span class="text-danger">{{ $errors->has('firstName') ? $errors->first('firstName') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="col-md-3 control-label">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="lastName" placeholder="Last Name">
                                <span class="text-danger">{{ $errors->has('lastName') ? $errors->first('lastName') : ' ' }}</span>
                            </div>
                        </div>

                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" placeholder="Email Address">
                            <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                            <label for="password" class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : ' ' }}</span>
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="ConfirmPassword" class="col-md-3 control-label">Confirm Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name=" confirmPassword" placeholder="Confirm Password">
                            <span class="text-danger">{{ $errors->has('confirmPassword') ? $errors->first('confirmPassword') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phoneNo" class="col-md-3 control-label">Phone No</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="phoneNo" placeholder="Phone No">
                            <span class="text-danger">{{ $errors->has('phoneNo') ? $errors->first('phoneNo') : ' ' }}</span>
                        </div>
                    </div>

                        <div class="form-group">
                            <label for="address" class="col-md-3 control-label">Address</label>
                            <div class="col-md-9">
                                <textarea type="text" class="form-control" name="address" placeholder="Address"></textarea>
                                <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : ' ' }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-md-offset-3 col-md-9">
                                <input id="btn-signup" type="submit" name="btn" class="btn btn-info" value="Sign Up">
                           
                            </div>
                        </div>

                        {{ Form::close() }}
                    {{--</form>--}}
                </div>
            </div>
        </div>
        
    </div>



    {{--<div class="container-fluid">--}}
        {{--<div class="row" style="margin-left: 15%">--}}
            {{--<div class="col-lg-5 col-lg-offset-6 col-lg-4 login main-agileits form-w3agile form1" style="margin: 5%">--}}
                {{--<div>--}}
                    {{--<h3>Register</h3>--}}
                    {{--<form action="#" method="post">--}}
                        {{--<div class="key">--}}
                            {{--<i class="fa fa-user" aria-hidden="true"></i>--}}
                            {{--<input  type="text" name="firstName" placeholder="First Name">--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                        {{--<div class="key">--}}
                            {{--<i class="fa fa-user" aria-hidden="true"></i>--}}
                            {{--<input  type="text" name="lastName" placeholder="Last Name">--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                        {{--<div class="key">--}}
                            {{--<i class="fa fa-envelope" aria-hidden="true"></i>--}}
                            {{--<input  type="text" name="email" placeholder="Email">--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                        {{--<div class="key">--}}
                            {{--<i class="fa fa-lock" aria-hidden="true"></i>--}}
                            {{--<input  type="password" name="Password" placeholder="Password" >--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                        {{--<div class="key">--}}
                            {{--<i class="fa fa-lock" aria-hidden="true"></i>--}}
                            {{--<input  type="password" name="confirmPassword" placeholder="Confirm Password" >--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                        {{--<div class="key">--}}
                            {{--<i class="fa fa-phone" aria-hidden="true"></i>--}}
                            {{--<input  type="text" name="phoneNo" placeholder="Phone No" >--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                        {{--<div class="key">--}}
                            {{--<i class="fas fa-address-card" aria-hidden="true"></i>--}}
                            {{--<input  type="text" name="address" placeholder="Address" >--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                        {{--<input type="submit" name="btn" value="Submit">--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-5 col-lg-offset-6 col-lg-4 login main-agileits form-w3agile form1" style="margin: 5%">--}}
               {{--<div>--}}
                   {{--<h3>Login</h3>--}}
                   {{--{{ Form::open(['route'=>'new-product', 'method'=>'POST', 'class'=>'form-horizontal']) }}--}}
                   {{--<form action="#" method="post">--}}

                   {{--<div class="key">--}}
                   {{--<i class="fa fa-envelope" aria-hidden="true"></i>--}}
                   {{--<input  type="text" name="email" placeholder="Email">--}}
                   {{--<div class="clearfix"></div>--}}
                   {{--</div>--}}
                   {{--<div class="key">--}}
                   {{--<i class="fa fa-lock" aria-hidden="true"></i>--}}
                   {{--<input  type="password" name="Password" placeholder="Password" >--}}
                   {{--<div class="clearfix"></div>--}}
                   {{--</div>--}}
                   {{--<input type="submit" name="btn" value="Submit">--}}
                   {{--</form>--}}
                   {{--{{ Form::close() }}--}}
               {{--</div>--}}
           {{--</div>--}}
        {{--</div>--}}


    {{--</div>--}}


            {{--<div class="login col-md-6 col-md-offset-3">--}}
                {{--<div class="main-agileits">--}}
                    {{--<div class="form-w3agile form1 ">--}}
                        {{--<h3>Register</h3>--}}
                        {{--<form action="#" method="post">--}}
                            {{--<div class="key">--}}
                                {{--<i class="fa fa-user" aria-hidden="true"></i>--}}
                                {{--<input  type="text" name="firstName" placeholder="First Name">--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                            {{--<div class="key">--}}
                                {{--<i class="fa fa-user" aria-hidden="true"></i>--}}
                                {{--<input  type="text" name="lastName" placeholder="Last Name">--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                            {{--<div class="key">--}}
                                {{--<i class="fa fa-envelope" aria-hidden="true"></i>--}}
                                {{--<input  type="text" name="email" placeholder="Email">--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                            {{--<div class="key">--}}
                                {{--<i class="fa fa-lock" aria-hidden="true"></i>--}}
                                {{--<input  type="password" name="Password" placeholder="Password" >--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                            {{--<div class="key">--}}
                                {{--<i class="fa fa-lock" aria-hidden="true"></i>--}}
                                {{--<input  type="password" name="confirmPassword" placeholder="Confirm Password" >--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                            {{--<div class="key">--}}
                                {{--<i class="fa fa-phone" aria-hidden="true"></i>--}}
                                {{--<input  type="text" name="phoneNo" placeholder="Phone No" >--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                            {{--<div class="key">--}}
                                {{--<i class="fas fa-address-card" aria-hidden="true"></i>--}}
                                {{--<input  type="text" name="address" placeholder="Address" >--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                            {{--<input type="submit" name="btn" value="Submit">--}}
                        {{--</form>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!--content-->
    @endsection