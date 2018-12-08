@extends('layouts.home_layout')
@section('content')

<section class="mid-sections">
    <div class="container-fluid">
      <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="inner-right">
               
                <div class="row clearfix l-r-padd15">
                
                    <div class="col-sm-12">
                      <div class="row">
                        <?php foreach($stickers as $sticker){ ?>
                          <div class="col-sm-2">
                            <div class="custom-all-user">
                                <a href="#">
                                  <div class="inner-all-user">
                                    <img src="{{url('/')}}/public/upload/<?php echo $sticker['sticker_img'] ?>">
                                    <div class="inner-text">
                                    <h5><?php echo $sticker['sticker_name'] ?></h5>
                                    <p>$<?php echo $sticker['price'] ?></p>
                                    <p><a href="{{url('/')}}/add-cart/<?php echo $sticker['id'] ?>">Add to cart</a></p>
                                    </div>
                                  </div>
                                </a>
                            </div>
                          </div>
                        <?php } ?>
                      </div>
                    </div>

                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

@endsection