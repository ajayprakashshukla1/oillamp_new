
@extends('layouts.login')
@section('content')
  
<div class="row custom-border-full">
    <div class="col-sm-5">
      <div class="login-form">
          
          {!! Form::open(['id'=>'Login','class'=>'form-horizontal','method'=>'post']) !!}  
              <h1 class="form-heading text-center">Login Form</h1>

              {{ csrf_field() }}              
              @if(isset($error))
                <div class="row">
                  <div class="col-md-12">
                    <div class="alert alert-danger">
                      <button class="close" data-close="alert"></button>
                      <span> Email or password is not correct </span>
                    </div>
                  </div>
                </div>
              @endif

              @if(isset($success))
                <div class="row">
                  <div class="col-md-12">
                    <div class="alert alert-success">
                      <button class="close" data-close="alert"></button>
                      <span> {{ $success }} </span>
                    </div>
                  </div>
                </div>
              @endif
              
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  {!! Form::email('email', $value = null, $attributes = ['class'=>'form-control', 'autocomplete'=>'off' ,'placeholder'=>'Enter email' ]) !!}
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                  {!!  Form::password('password', ['id'=>'pwd','class'=>'form-control', 'type'=>'password' ,'autocomplete'=>'off', 'placeholder'=>'Password']); !!}
                </div>
              </div>

              <div class="forgot text-center">
                <a href="#">Forgot username / password</a>
              </div>

              <div class="checkbox text-center">
                  <label><input type="checkbox" name="remember"> Remember me</label>
              </div>

              <p class="text-center">
                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</button>

              </p>
          {!! Form::close() !!}
          <p class="text-center"><a href="{{url('registration')}}">Sign Up</a></p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="inner-or">
        <p class="text-center"><img src="{{url('public/assets/images/or.png')}}"/></p>
      </div>
    </div>
    <div class="col-sm-5">
      <div class="inner-solcial-right">
         <h1 class="form-heading text-center">Login with SNS</h1>
         <p class="twitter text-center">
          <button type="button" class="btn btn-info"><i class="fa fa-twitter" aria-hidden="true"></i>twitter</button>
         </p>
         <p class="facebook text-center">
          <button type="button" class="btn btn-primary"><i class="fa fa-facebook" aria-hidden="true"></i>facebook</button>
         </p>
      </div>
    </div>
</div>


@endsection