@foreach($products as $r)
@extends('shop.app')

@section('title')
Jual {{$r->prdname}} Murah se-Indonesia gratis ongkir
@endsection
@section('content')
<div class="container">
 <!-- /.row -->
        <div class="row">
           <!-- kategori -->
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active">Electronics
                    </a>
                    <ul class="list-group">
                        <li class="list-group-item">Mobile
                          <span class="label label-primary pull-right">234</span>
                        </li>
                        <li class="list-group-item">Computers
                          <span class="label label-success pull-right">34</span>
                        </li>
                        <li class="list-group-item">Tablets
                          <span class="label label-danger pull-right">4</span>
                        </li>
                        <li class="list-group-item">Appliances
                          <span class="label label-info pull-right">434</span>
                        </li>
                        <li class="list-group-item">Games & Entertainment
                          <span class="label label-success pull-right">34</span>
                        </li>
                    </ul>
                </div>
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active list-group-item-success">Clothing & Wears
                    </a>
                    <ul class="list-group">

                        <li class="list-group-item">Men's Clothing
                             <span class="label label-danger pull-right">300</span>
                        </li>
                        <li class="list-group-item">Women's Clothing
                             <span class="label label-success pull-right">340</span>
                        </li>
                        <li class="list-group-item">Kid's Wear
                             <span class="label label-info pull-right">735</span>
                        </li>

                    </ul>
                </div>
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active">Accessaries & Extras
                    </a>
                    <ul class="list-group">
                        <li class="list-group-item">Mobile Accessaries
                             <span class="label label-warning pull-right">456</span>
                        </li>
                        <li class="list-group-item">Men's Accessaries
                             <span class="label label-success pull-right">156</span>
                        </li>
                        <li class="list-group-item">Women's Accessaries
                             <span class="label label-info pull-right">400</span>
                        </li>
                        <li class="list-group-item">Kid's Accessaries
                             <span class="label label-primary pull-right">89</span>
                        </li>
                        <li class="list-group-item">Home Products
                             <span class="label label-danger pull-right">90</span>
                        </li>
                        <li class="list-group-item">Kitchen Products
                             <span class="label label-warning pull-right">567</span>
                        </li>
                    </ul>
                </div>
                <!-- /.div -->
                <div>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success"><a href="#">New Offer's Coming </a></li>
                        <li class="list-group-item list-group-item-info"><a href="#">New Products Added</a></li>
                        <li class="list-group-item list-group-item-warning"><a href="#">Ending Soon Offers</a></li>
                        <li class="list-group-item list-group-item-danger"><a href="#">Just Ended Offers</a></li>
                    </ul>
                </div>
                <!-- /.div -->
                <div class="well well-lg offer-box offer-colors">


                    <span class="glyphicon glyphicon-star-empty"></span>25 % off  , GRAB IT                 
              
                   <br />
                    <br />
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                            style="width: 70%">
                            <span class="sr-only">70% Complete (success)</span>
                            2hr 35 mins left
                        </div>
                    </div>
                    <a href="#">click here to know more </a>
                </div>
                <!-- /.div -->                
            </div>
            <!-- end kategori -->            
            <!-- /.col -->
            <div class="col-md-9">
                <div>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Electronics</li>
                        <li><i>{{$r->prdname}}</i></li>
                    </ol>
                </div>
                <!-- /.row -->
        	<div class="row">
               <div class="col-xs-4 item-photo">
                    <img style="max-width:100%;" src="{{url('shopnew/assets/img')}}/{{$r->prdthumb}}" />
                </div>
                <form action="{{url('cart')}}" method="post">
                	{{ csrf_field() }}
					<input type="hidden" name="id" value="{{$r->id}}">
					<input type="hidden" name="name" value="{{$r->prdname}}">
					<input type="hidden" name="price" value="{{$r->prdprice}}">
					<input type="hidden" name="thumb" value="{{$r->prdthumb}}">                	
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3>{{$r->prdname}}</h3>    
                    <h5 style="color:#337ab7">vendido por <a href="#">...</a> · <small style="color:#337ab7">(5054 ventas)</small></h5>
        
                    <!-- Precios -->
                    <h6 class="title-price"><small>Harga normal</small><del>{{$r->prdprice}}</del></h6>
                    <h3 style="margin-top:0px;">Rp.{{number_format($r->prdprice,2)}}</h3>
        
                    <!-- Detalles especificos del producto -->
                    <div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>Warna</small></h6>                    
                        <div>
	                        <label class="ctr">Biru
							  <input type="checkbox" value="biru" name="warna">
							  <span class="checkmark"></span>
							</label>&nbsp;
							<label class="ctr">Merah Muda
							  <input type="checkbox" value="pink" name="warna">
							  <span class="checkmark"></span>
							</label>
                        </div>
                    </div>
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>Size</small></h6>                    
                        <div>
                            <select name="size" class="attr2">
                            	<option value=""></option>
                            	<option value="s">S</option>
                            	<option value="m">M</option>
                            	<option value="l">L</option>
                            	<option value="xl">XL</option>
                            </select>
                        </div>
                    </div>   
                    <div class="section" style="padding-bottom:20px;">
                        <h6 class="title-attr"><small>Qty</small></h6>                    
                        <div>
                            <input name="quantity" required="">
                        </div>
                    </div>                
        
                    <!-- Botones de compra -->
                    <div class="section" style="padding-bottom:20px;">
                        <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to cart</button>
                    </div>                                        
                </div>                              
        		</form>
                <div class="col-xs-9">
                    <ul class="menu-items">
                        <li class="active">Detalle del producto</li>
                        <li>Garantía</li>
                        <li>Vendedor</li>
                        <li>Envío</li>
                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                            <small>
                            Stay connected either on the phone or the Web with the Galaxy S4 I337 from Samsung. With 16 GB of memory and a 4G connection, this phone stores precious photos and video and lets you upload them to a cloud or social network at blinding-fast speed. With a 17-hour operating life from one charge, this phone allows you keep in touch even on the go. 
        
                            With its built-in photo editor, the Galaxy S4 allows you to edit photos with the touch of a finger, eliminating extraneous background items. Usable with most carriers, this smartphone is the perfect companion for work or entertainment.
                            </small>
                        </p>
                        <small>
                            <ul>
                                <li>Super AMOLED capacitive touchscreen display with 16M colors</li>
                                <li>Available on GSM, AT T, T-Mobile and other carriers</li>
                                <li>Compatible with GSM 850 / 900 / 1800; HSDPA 850 / 1900 / 2100 LTE; 700 MHz Class 17 / 1700 / 2100 networks</li>
                                <li>MicroUSB and USB connectivity</li>
                                <li>Interfaces with Wi-Fi 802.11 a/b/g/n/ac, dual band and Bluetooth</li>
                                <li>Wi-Fi hotspot to keep other devices online when a connection is not available</li>
                                <li>SMS, MMS, email, Push Mail, IM and RSS messaging</li>
                                <li>Front-facing camera features autofocus, an LED flash, dual video call capability and a sharp 4128 x 3096 pixel picture</li>
                                <li>Features 16 GB memory and 2 GB RAM</li>
                                <li>Upgradeable Jelly Bean v4.2.2 to Jelly Bean v4.3 Android OS</li>
                                <li>17 hours of talk time, 350 hours standby time on one charge</li>
                                <li>Available in white or black</li>
                                <li>Model I337</li>
                                <li>Package includes phone, charger, battery and user manual</li>
                                <li>Phone is 5.38 inches high x 2.75 inches wide x 0.13 inches deep and weighs a mere 4.59 oz </li>
                            </ul>  
                        </small>
                    </div>
                </div>		
            </div>
                <div class="row">
                    <h2>Produk Lainnya</h2>
	                </div>
	                <!-- /.row -->
	                <div class="row">
	                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
	                        <div class="thumbnail product-box">
	                            <img src="{{url('shopnew')}}/assets/img/dummyimg.png" alt="" />
	                            <div class="caption">
	                                <h3><a href="#">Samsung Galaxy </a></h3>
	                                <p>Price : <strong>$ 3,45,900</strong>  </p>
	                                <p><a href="#">Ptional dismiss button </a></p>
	                                <p>Ptional dismiss button in tional dismiss button in   </p>
	                                <p>
	                                    <a href="#" class="btn btn-success" role="button">Add To Cart</a>
	                                    <a href="#" class="btn btn-primary" role="button">See Details</a>
	                                </p>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- /.col -->
	                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
	                        <div class="thumbnail product-box">
	                            <img src="{{url('shopnew')}}/assets/img/dummyimg.png" alt="" />
	                            <div class="caption">
	                                <h3><a href="#">Samsung Galaxy </a></h3>
	                                <p>Price : <strong>$ 3,45,900</strong>  </p>
	                                <p><a href="#">Ptional dismiss button </a></p>
	                                <p>Ptional dismiss button in tional dismiss button in   </p>
	                                <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="#" class="btn btn-primary" role="button">See Details</a></p>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- /.col -->
	                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
	                        <div class="thumbnail product-box">
	                            <img src="{{url('shopnew')}}/assets/img/dummyimg.png" alt="" />
	                            <div class="caption">
	                                <h3><a href="#">Samsung Galaxy </a></h3>
	                                <p>Price : <strong>$ 3,45,900</strong>  </p>
	                                <p><a href="#">Ptional dismiss button </a></p>
	                                <p>Ptional dismiss button in tional dismiss button in   </p>
	                                <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="#" class="btn btn-primary" role="button">See Details</a></p>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- /.col -->
	                </div>
	                <!-- /.row -->
                <div class="row">
                    <ul class="pagination alg-right-pad">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</div>
@endsection
@endforeach