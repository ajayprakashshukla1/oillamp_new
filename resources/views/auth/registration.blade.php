@extends('layouts.login')
@section('content')
  

<div class="row custom-border-full">
    <div class="col-sm-5">
      <div class="login-form">

          {!! Form::open(['id'=>'Login','class'=>'form-horizontal','method'=>'post']) !!} 
              {{ csrf_field() }}  

              <h1 class="form-heading text-center">Sign Up Form</h1>

              @if(session()->has('success'))
                  <div class="alert alert-success">
                      {{ session()->get('success') }}
                  </div>
              @endif

              @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                  {{ $error }}
                </div>
              @endforeach
              
              <div class="form-group">
                <label class="control-label col-sm-2" for="email"> Nickname:</label>
                <div class="col-sm-10">
                  {!! Form::text('nickname', $value = null, $attributes = ['class'=>'form-control', 'autocomplete'=>'off' ,'placeholder'=>'Enter Nickname' ]) !!}
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  {!! Form::email('email', $value = null, $attributes = ['class'=>'form-control', 'autocomplete'=>'off' ,'placeholder'=>'Enter email' ]) !!}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                  {!!  Form::password('password', ['class'=>'form-control', 'type'=>'password' ,'autocomplete'=>'off', 'placeholder'=>'Enter password']); !!}
                </div>
              </div>
              <p class="text-center"><button type="submit" class="btn btn-primary"><img src="{{url('public/assets/images/sing.png')}}">Sign Up</button></p>
          {!! Form::close() !!}
      </div>
    </div>
    <div class="col-sm-2">
      <div class="inner-or">
        <p class="text-center"><img src="{{url('public/assets/images/or.png')}}"/></p>
      </div>
    </div>
    <div class="col-sm-5">
      <div class="inner-solcial-right">
        <h1 class="form-heading text-center">Sign Up with SNS</h1>
        <p class="twitter text-center"><button type="button" class="btn btn-info"><i class="fa fa-twitter" aria-hidden="true"></i>twitter</button></p>
        <p class="facebook text-center"><button type="button" class="btn btn-primary"><i class="fa fa-facebook" aria-hidden="true"></i>facebook</button></p>
      </div>
    </div>
</div>


@endsection