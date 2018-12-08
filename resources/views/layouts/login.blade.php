
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Oillamp</title>
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
          <li class="pre-page"><a href="{{url('/')}}">Home</a></li>
          <li class="curent-page"><a href="{{url('login')}}">Login</a></li>
        </ul>
      </div>
      </div>
    </div>
  </section>
<div class="container">
  
  @yield('content')

</div>


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