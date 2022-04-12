@extends('layouts.app')

@section('pageCss')
<style type="text/css">
/*.user_select{display:flex;justify-content:center;align-items:center;}
.user_select_container{position:relative;padding:0;margin:auto 5px;width:100%;}
.user_select input[type=radio]{opacity:0;height:40px;width:100%;}
.user_select input[type=radio]:hover, .user_select_container label:hover{cursor:pointer;}
.user_select_container label{position:absolute;top:12px;left:72px;}
.btn-default{background-color: #f4f4f4;color: #444;border-color: #ddd;}
.user_select_container:active{background-color:#d73925;}*/
</style>
@stop

@section('content')
<section class="login-block">
    <div class="row">
        <div class="col-md-8 banner-sec">   
            <div class="banner shopper">
                <div class="banner-container">
                    <div class="navbar-header">
                        <a class="navbar-brand page-scroll" href="{{ url('/') }}"><img src="{{asset('public/looksyassets/images/logo.png') }}" alt="Lattes theme logo"></a>
                    </div>
                    <div class="banner-content">
                       <h2>Become  A  Shopper</h2>
                       <p> Learn & explore some of the best experiences directly from the experts. </p>
                    </div>                           
                </div>
            </div>
        </div>
        <div class="col-md-4 login-sec signup-sec main_form">
            <h2 class="text-center">Signup Now</h2>
            <form method="POST" class="login100-form validate-form" action="{{ route('register') }}">
                @csrf
                <!-- <div class="wrap-input100 validate-input user_select">
                    <div class="user_select_container btn btn-default">
                        <input id="shopper" type="radio" value="shopper" class="form-control" name="user_type">
                        <label for="shopper">Shopper</label>
                    </div>
                    <div class="user_select_container btn btn-default">
                        <input id="host" type="radio" value="host" class="form-control" name="user_type">
                        <label for="host">Host</label>
                    </div>
                </div> -->
                <input type="hidden" name="user_type" value="shopper">
                <div class="wrap-input100 validate-input">
                    <input class="input100 form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required>
                    @if ($errors->has('first_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif                           
                </div>
                <div class="wrap-input100 validate-input">                          
                    <input class="input100 form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" type="text" name="last_name" value="{{ old('last_name') }}"
                    placeholder="Last Name" required>
                    @if ($errors->has('last_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif                             
                </div>
                <div class="wrap-input100 validate-input">                          
                    <input class="input100 form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" type="text" name="user_name" value="{{ old('user_name') }}"
                    placeholder="Username" required>
                    @if ($errors->has('user_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('user_name') }}</strong>
                        </span>
                    @endif                         
                </div>
                <div class="wrap-input100 validate-input">
                    <input class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="E-Mail Address" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif                           
                </div>
                <div class="wrap-input100 validate-input">
                    <input class="input100 form-control{{ $errors->has('postal_code') ? ' is-invalid' : '' }}" type="text" name="postal_code" placeholder="Zip Code" required>
                    @if ($errors->has('postal_code'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('postal_code') }}</strong>
                        </span>
                    @endif                        
                </div>
                <div class="wrap-input100 validate-input">
                    <input class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif                          
                </div>
                <div class="wrap-input100 validate-input">
                    <input class="input100 form-control" type="password" name="password_confirmation" placeholder="Re-enter Password" required>
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <button class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <p style="margin-bottom:0px;">Already have an account?&nbsp;<a href="{{ route('login') }}" style="text-decoration:none;">Sign In</a></p>
                    <p>Want to join as Host?&nbsp;<a href="{{ url('register-host') }}" style="text-decoration:none;">Click here.</a></p>
                </div>
                <!-- <div class="form-group">
                    <div class="col-md-6 col-md-offset-4"> -->
                        <!-- <a href="{{ url('/auth/github') }}" class="btn btn-github"><i class="fa fa-github"></i> Github</a>
                        <a href="{{ url('/auth/twitter') }}" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a> -->
                        <!-- <a href="{{ url('/auth/facebook') }}" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                    </div>
                </div> -->
            </form>
        </div>
    </div>
</section>
@endsection

@section('pageJs')
<!-- <script type="text/javascript">
    $(".user_select input[type=radio]").on("click", function(){
        $(".user_select_container").removeClass("btn-danger").addClass("btn-default");
        $(this).parent(".user_select_container").removeClass("btn-default").addClass("btn-danger");
    });
</script> -->
@stop
