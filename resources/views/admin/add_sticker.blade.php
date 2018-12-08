@extends('layouts.admin_layout')
@section('content')


<div class="login-form">

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

    <center><h1>Add Image Content</h1></center> <br>
    
    {!! Form::open(['class'=>'form-horizontal','method'=>'post','files'=> true]) !!}   
        {{ csrf_field() }}  
        
        <div class="form-group">
          <label class="control-label col-sm-2" >Sticker Name</label>
          <div class="col-sm-7">
            <input type="text" name="sticker_name" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" >Price</label>
          <div class="col-sm-7">
            <input type="text" name="price" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Upload Sticker</label>
          <div class="col-sm-7">
            <input type="file" name="sticker_img" class="form-control">
          </div> 
        </div>

        <p class="text-center"><button type="submit" class="btn btn-primary">Add Sticker</button></p>
                          
    {!! Form::close() !!}
</div>

@endsection