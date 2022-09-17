@extends('shop.app')
@section('title')
Jual Beli Murah se-Indonesia gratis ongkir
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
                        <li class="active">Produk</li>
                    </ol>
                </div>
                <!-- /.row content produk -->
                <div class="row">
                   @foreach( $product as $r )
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="{{url('shopnew')}}/assets/img/{{$r->prdthumb}}" alt="Beli {{$r->prdname}} Murah" />
                            <div class="caption">
                                <p><img src="{{url('shopnew/assets/img')}}/star22.png"><img src="{{url('shopnew/assets/img')}}/star22.png"><img src="{{url('shopnew/assets/img')}}/star22.png"><img src="{{url('shopnew/assets/img')}}/star22.png"></p>
                                <h3><a href="#">{{$r->prdname}}</a></h3>
                                <p>Price : <del>{{$r->prdprice+200000}}</del></p>
                                <p><strong><h4>{{number_format($r->prdprice,1)}}</h4></strong> </p> 
                                <p>
                                  <div class="row">
                                    <div class="col-md-6">
                                     <!-- tombol modal -->
                               
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                                    Add To Cart
                                    </button>
                                                                         
                                    </div>
                                    <div class="col-md-6">
                                      <a href="{{url('beli',$r->id)}}" class="btn btn-primary" role="button">See Details</a>                                      
                                    </div>

                                    <!-- Include modal for home blade -->
                                    @include('shop.modalproduct');
                                    
                                  </div>
                                </p>
                            </div>
                        </div>
                    </div>
                   @endforeach
                    <!-- /.col -->
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