@extends('toko.layouts.app')
@section('title')
Checkout Now!
@endsection
@section('content')
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
					</li>
					<li>Checkout</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			@if($message = Session::get('sukses'))
			<p class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ $message }}</p>
			@endif
			@if($message = Session::get('gagal'))
			<p class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ $message }}</p>
			@endif	
			@if($message = Session::get('update'))
			<p class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ $message }}</p>
			@endif					
			<h3 class="tittle-w3l">Checkout
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				@if(sizeof(Cart::content()) > 0)
				<h4>Ada<span> <span class="text-success">{{Cart::content()->count()}} </span>Jenis Products di Keranjang Belanja Anda !</span></h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<!-- <th>SL No.</th> -->
								<th>Product</th>
								<th>Product Name</th>

								<th>Price</th>
								<th>Quality</th>
								<th>Total</th>								
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
						@foreach (Cart::content() as $item)
							<tr class="{{$no++}}">
								<!-- <td class="invert">{{$no++}}</td> -->
								<td class="invert-image">
									<a href="single2.html">
										<img src="{{url('shop')}}/images/{{$item->model->prdthumb}}" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">{{$item->name}}</td>
								<td class="invert">Rp.{{$item->price}}</td>
								<td class="invert">
									<form method="post" action="{{ url('update')}}/{{ $item->rowId }}">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="{{$item->rowId}}">
									<input type="number" name="quantity" required="required" value="{{$item->qty}}">
									<button class="btn btn-warning" name="UPDATE"><i class="fa fa-refresh"></i></button>
									</form>												
								</td>		
								<td class="invert">
									{{ $item->price * $item->qty  }}
								</td>						
								<td class="invert">
									<div class="rem">
										<div class="close1"> 
											<form method="post" action="{{ url('remove')}}">
												{{ csrf_field() }}
												<input type="hidden" name="id" value="{{$item->rowId}}">
				                                <input type="hidden" name="_method" value="DELETE">				
												<button class="btn btn-danger" name="DELETE"><i class="fa fa-window-close"></i></button>
											</form>
										</div>
									</div>
								</td>
							</tr>
						@endforeach
						</tbody>
						<tfoot>
							<tr>
								<td colspan="4"><b>Subtotal</b></td>
								<td><b>{{ Cart::subtotal() }}</b></td>
								<td></td>
							</tr>										
						</tfoot>
					</table>
				</div>
				@else
				<h4 class="text-center">Keranjang Anda <span><span class="text-success">{{Cart::content()->count()}} </span>. Yuks Belanja! <br><a href="{{url('')}}" class="btn btn-success">Go Shop</a></span></h4>				
				@endif
			</div>
			<div class="checkout-left">
				<div class="address_form_agile">
					<h4>Add a new Details</h4>
					<form action="{{url('checkout')}}" method="post" class="creditly-card-form agileinfo_form">
						{{ csrf_field() }}
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls">
										<input class="billing-address-name" type="text" name="ordfullname" placeholder="Full Name" required="">
									</div>
									<div class="controls">
										<input class="billing-address-name" type="email" name="ordmail" placeholder="E-mail Name" required="">
									</div>									
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="text" placeholder="Mobile Number" name="ordnohp" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<input type="text" placeholder="Alamat" name="ordalamat" required="">
											</div>
										</div>
										<div class="clear"> </div>
									</div>
									<div class="controls">
										<input type="text" placeholder="Town/City" name="ordkota" required="">
									</div>
									<div class="controls">
										<input type="text" placeholder="Provinsi" name="ordprovinsi" required="">
									</div>									
									<div class="controls">
										<select class="option-w3ls" name="ordmethod">
											<option>Select type payments</option>
											<option value="COD">COD</option>
											<option value="TF">Transfer ATM</option>
										</select>
									</div>
								</div>
								<button class="submit check_out">Delivery to this Address</button>
							</div>
						</div>
					</form>
					<div class="checkout-right-basket">
						<a href="payment.html">Make a Payment
							<span class="fa fa-hand-o-right" aria-hidden="true"></span>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->	
@endsection