<!DOCTYPE html>
<html lang="en">
<head>
  <title>topic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   {!! Html::style(url('/public/assets/css/style.css')) !!}
   {!! Html::style(url('/public/assets/css/bootstrap.min.css')) !!}
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  {!! HTML::script(url('/public/assets/js/jquery.min.js')); !!}
  {!! HTML::script(url('/public/assets/js/bootstrap.min.js')); !!}   
</head>
<body>
   <section class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="logo">
            <a href="#"><img src="{{url('public/assets/images/logo.png')}}"></a>
          </div>
        </div>
         <div class="col-sm-8">
           <div class="inner-header-right">
             <form>
              <input type="text" name="search">
              <button type="submit"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
            </form>
           </div>
         </div>
         <div class="col-sm-1">
           <div class="inner-cart">
             <p><a href="#"><img src="{{url('public/assets/images/reload.png')}}"></a></p>
             <p><a href="#"><img src="{{url('public/assets/images/cart.png')}}"></a></p>
           </div>
         </div>
      </div>
    </div>
  </section>
  <section class="all-page-title">
    <div class="container-fluid">
      <div class="row custom-titele">
        <div class="col-sm-12">
        <ul>
          <li class="pre-page"><a href="#">Home</a></li>
          <li class="curent-page"><a href="#">topic</a></li>
          <li class="pre-page"><a href="{{url('logout')}}">Logout</a></li>
        </ul>
      </div>
      </div>
    </div>
  </section>
  <!-- Midd section -->
  <section class="mid-sections">

    @yield('content')
    
    
  </section>

  
<!--- Footer start -->
<section class="footer-menu">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#">Blogs</a></li>
        <li><a href="#">Page</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </div>
</div>
</section>
<section class="footer-logo">
  <div class=" text-center"><img src="{{url('public/assets/images/logo.png')}}"></div>
</section>
</body>
</html>



<?php /*
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Oillamp</title>
    <!-- Bootstrap Core CSS -->
    {!! Html::style(url('/public/assets/vendor/bootstrap/css/bootstrap.min.css')) !!}
    <!-- MetisMenu CSS -->
    {!! Html::style(url('/public/assets/vendor/metisMenu/metisMenu.min.css')) !!}
    <!-- Custom CSS -->
    {!! Html::style(url('/public/assets/dist/css/sb-admin-2.css')) !!}
    <!-- Morris Charts CSS -->
    {!! Html::style(url('/public/assets/vendor/morrisjs/morris.css')) !!}
    <!-- Custom Fonts -->
    {!! Html::style(url('/public/assets/vendor/font-awesome/css/font-awesome.min.css')) !!}

    {!! Html::style(url('/public/css/jquery.datetimepicker.css')) !!}
    <style type="text/css">
       #page-wrapper{
           margin: 0 0 0 1px !important;
       }
       .form-subtitle{
          display: none;
       }
  
        #page-wrapper {
            padding: 0 70px;
        }

        .form-group {
            margin-bottom: 25px;
        }
    </style>
</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;padding: 0 55px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="" href="#">
                  <img src="{{ url('/public/img/logossss.png')}}" />
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-left">
              <!-- <li><a href="{{url('dashboard')}}">Organizations</a></li>
              <li><a href="{{url('users_list')}}">Users</a></li>
              <li><a href="{{url('license_list')}}">Licenses</a></li>
              <li><a href="{{url('settings')}}">Settings</a></li>   -->
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <ul class="nav navbar-top-links navbar-right">
               <li style="margin-top: 10px;"><button class="btn btn-default" onclick="getout()"><span class="glyphicon glyphicon-log-out"></span> Logout</button></li>  
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
           @yield('content')
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    {!! HTML::script(url('/public/assets/vendor/jquery/jquery.min.js')); !!}
    <!-- Bootstrap Core JavaScript -->
    {!! HTML::script(url('/public/assets/vendor/bootstrap/js/bootstrap.min.js')); !!}
    <!-- Metis Menu Plugin JavaScript -->
    {!! HTML::script(url('/public/assets/vendor/metisMenu/metisMenu.min.js')); !!}
    <!-- Custom Theme JavaScript -->
    {!! HTML::script(url('/public/assets/dist/js/sb-admin-2.js')); !!}

    {!! HTML::script(url('/public/js/jquery.datetimepicker.js')); !!}


<script type="text/javascript">
function getout(){
    window.location.href="{{url('logout')}}";
}    
</script>

</body>

</html>
*/ ?>