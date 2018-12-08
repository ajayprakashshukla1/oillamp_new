@extends('layouts.admin_layout')
@section('content')


<div class="row">
  <div class="col-md-12">
  	@if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Thumb</th>
	      <th scope="col">Name</th>
	      <th scope="col">Price</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach($stickers as $sticker){ ?>
	    <tr>
	      <td><img src="{{ url('/') }}/public/upload/<?php echo $sticker->sticker_img ?>" class="img-round" width="60px;" /></td>
	      <td><?php echo $sticker['sticker_name'] ?></td>
	      <td><?php echo $sticker['price'] ?></td>
	      <td>
	      	<a href="{{url('/')}}/admin/delete_sticker/<?php echo $sticker['id']; ?>" class="btn btn-sm btn-danger">DELETE</a>
	      </td>
	    </tr>
	    <?php } ?>
	  </tbody>
	</table>	
  </div>	
</div>


@endsection