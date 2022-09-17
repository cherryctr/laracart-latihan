@extends('shop.app')
@section('title')
Checkout Sekarang !
@endsection

@section('content')
<div class="container">
			@if($message = Session::get('sukses'))
			<p class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ $message }}</p>
			@endif
			@if($message = Session::get('gagal'))
			<p class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ $message }}</p>
			@endif	
			@if($message = Session::get('update'))
			<p class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ $message }}</p>
			@endif	
			
			@if(sizeof(Cart::content()) > 0)
		  	<h2>Keranjang Belanja !</h2>           
		  	<table class="table table-bordered">
			    <thead>
			      <tr>
			      	<th>#</th>
			        <th>Product Name</th>
			        <th>Product Image</th>
			        <th>Product Size</th>
			        <th>Product Color</th>
			        <th>Product Prize</th>
			        <th>Product Qty</th>
			        <th>Total</th>
			      </tr>
			    </thead>
			    <tbody>
			    @foreach(Cart::content() as $cart)
			      <tr>
			      	<td>
			        	<form method="post" action="{{url('cart',[$cart->rowId])}}">
			        		{{ csrf_field()}}
							{{method_field('PATCH')}}
			        		<input type="hidden" name="_method" value="DELETE">
			        		<input type="hidden" size="2" maxlength="2" name="id" value="{{$cart->rowId}}">
			        		<input type="submit" class="btn btn-danger" value="X">
			        	</form>      		
			      	</td>
			        <td>
			        	{{$cart->name}}
			        </td>
			        <td><img src="{{url('shopnew/assets/img')}}/{{$cart->model->prdthumb}}" class="img-responsive"></td>
			        <td>{{ strtoupper($cart->options->size) }}</td>
			        <td>{{ ucfirst($cart->options->warna) }}</td>
			        <td>{{ $cart->price }}</td>
			        <td>
			        	<form method="post" action="{{url('cart',[ $cart->rowId]) }}">
			        		{{ csrf_field()}}
							{{method_field('PATCH')}}
			        		<input type="number" size="2" maxlength="2" name="quantity" value="{{$cart->qty}}">
			        		<button class="btn btn-warning" type="submit"><i class="fa fa-refresh"></i></button>
			        	</form>
			        </td>
			        <td>{{$cart->price * $cart->qty }}</td>       
			      </tr>
			    @endforeach
			    </tbody>
			    <tfoot>
			    	<tr>
			    		<td colspan="7" align="center"><h4>Subtotal</h4></td>
			    		<td><h4>{{Cart::subtotal()}}</h4></td>
			    	</tr>
			    </tfoot>
			</table>
				<div class="row">
				  	<div class="text-right">
				  		<a href="{{url('')}}" class="btn btn-success">Go Shop</a>
				  		<a href="{{url('checkout')}}"><button class="btn btn-primary">Process To Checkout</button></a>
				  	</div>
				</div>
			@else
			<h2>Keranjang Belanja Anda Kosong</h2>
			<a href="{{url('')}}" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Go Shop</a>
			@endif
</div>
@endsection