@extends('layouts.home_layout')
@section('content')

<section class="mid-sections">
    <div class="container-fluid">
      <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="inner-right">
                <div class="col-sm-2">
                  <div class="inner-img"><img src="{{url('public/assets/images/cup.png')}}"></div>
                </div>
                <div class="col-sm-8">
                  <div class="inner-content">
                    <h3>Twitter name @ Twitter screen name</h3>
                    <p>........................................................................................................................................................<br>........................................................................................................................................................<br>....................................................................................</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="inner-right-btn">
                    <button type="button" class="btn btn-default"><img src="{{url('public/assets/images/suer-love.png')}}">Default</button>
                    <button type="button" class="btn btn-default"><img src="{{url('public/assets/images/spek.png')}}"></button>
                    <h2 class="text-center"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><img src="{{url('public/assets/images/gift.png')}}">Present</button></h2>
                  </div>
                </div>
                <div class="row clearfix l-r-padd15">
                <div class="col-sm-6">
                  <div class="custom-singal">
                    <p>..............................................................................................................................<br>....................................................................................................................<br>..............................................................................................................................<br>....................................................................................................................<br>..............................................................................................................................<br>....................................................................................................................<br>....................................................................................</p>
                  </div>
                </div>
                <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="custom-all-user">
                    <a href="#">
                    <div class="inner-all-user">
                      <img src="{{url('public/assets/images/all-profile.png')}}">
                      <div class="inner-text">
                      <h3>John Konno</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
                <div class="col-sm-6">
            <div class="custom-all-user">
            <a href="#">
            <div class="inner-all-user">
              <img src="{{url('public/assets/images/all-profile.png')}}">
              <div class="inner-text">
              <h3>John Konno</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
              </div>
            </div>
          </a>
        </div>
          </div>
        </div>
      </div>
                  </div>
                </div>
              </div>
          </div>
    </div>
  </div>
  </section>



<!-- popover -->
<div class="inner-popover">
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="row modal-body">
          <?php if(empty($user)){ ?>
            <div class="col-sm-12" style="height: 200px">
              <span style="color:white">You are not loggedin. <a href="{{url('/login')}}" style="color:#ffc011">Click here</a> to login</span>
            </div>
          <?php }else{ ?>  
              <?php if(empty($user_stickers)){ ?>
                <div class="col-sm-12" style="height: 200px">
                  <span style="color:white">You do not have any sticker to present <a href="{{url('/buy-sticker')}}" style="color:#ffc011">Click here</a> to add sticker first</span>
                </div>
              <?php }else{ ?>  
              <div class="col-sm-3">
              <img src="{{url('public/assets/images/sm-logo-icon.png')}}">
              </div>
              <div class="col-sm-3">
              <img src="{{url('public/assets/images/sm-logo-icon.png')}}">
              </div>
              <div class="col-sm-3">
              <img src="{{url('public/assets/images/sm-logo-icon.png')}}">
              </div>
              <div class="col-sm-3">
              <img src="{{url('public/assets/images/sm-logo-icon.png')}}">
              </div>
              <div class="col-sm-3">
              <img src="{{url('public/assets/images/sm-logo-icon.png')}}">
              </div>
              <div class="col-sm-3">
              <img src="{{url('public/assets/images/sm-logo-icon.png')}}">
              </div>
              <div class="col-sm-3">
              <img src="{{url('public/assets/images/sm-logo-icon.png')}}">
              </div>
              <div class="col-sm-3">
              <img src="{{url('public/assets/images/sm-logo-icon.png')}}">
              </div>
              <div class="col-sm-3">
              <img src="{{url('public/assets/images/sm-logo-icon.png')}}">
              </div>
              <div class="col-sm-3">
              <img src="{{url('public/assets/images/sm-logo-icon.png')}}">
              </div>
              <div class="col-sm-3">
              <img src="{{url('public/assets/images/sm-logo-icon.png')}}">
              </div>
              <div class="col-sm-3">
              <img src="{{url('public/assets/images/sm-logo-icon.png')}}">
              </div>
         <?php } } ?>
        </div>
      </div>
      
    </div>
  </div>
</div>

@endsection