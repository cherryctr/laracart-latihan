<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link href="{{url('shopnew')}}/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="{{url('shopnew')}}/assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="{{url('shopnew')}}/assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="{{url('shopnew')}}/assets/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
</head>
<body>

@foreach($user as $us)
<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2><h3 class="pull-right">Order:{{$us->created_at}}</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
                    {{$us->ordfullname}}<br>
                    {{$us->ordnohp}}<br>
                    {{$us->ordalamat}}<br>
                    {{$us->ordkota}},
                    {{$us->ordprovinsi}}
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
    					{{$us->ordfullname}}<br>
    					{{$us->ordnohp}}<br>
    					{{$us->ordalamat}}<br>
    					{{$us->ordkota}},{{$us->ordprovinsi}}
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:
                            @if($us->ordmethod=="TF")
                                Transfer
                            @else
                            COD
                            @endif
                        </strong><br>
    					COD<br>
    					123
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					{{$us->created_at}}<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
   
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
									<td class="text-center"><strong>Desc</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							@foreach($orders as $item)
								<tr>
    								<td>{{$item->prdname}}</td>
    								<td class="text-center">{{$item->prdprice}}</td>
    								<td class="text-center">{{$item->qty}}</td>
									<td class="text-center">warna {{$item->warna}} size {{$item->size}}</td>
										@if($item->warna!="Null")
											warna{{$item->warna}}
												@elseif($item->size!="Null")
												Size {{$item->size}}
													@endif 
											
    								<td class="text-right">{{$item->prdprice * $item->qty}}</td>
    							</tr>
								@endforeach
                                <!-- <tr>
        							<td>BS-400</td>
    								<td class="text-center">$20.00</td>
    								<td class="text-center">3</td>
    								<td class="text-right">$60.00</td>
    							</tr>
                                <tr>
            						<td>BS-1000</td>
    								<td class="text-center">$600.00</td>
    								<td class="text-center">1</td>
    								<td class="text-right">$600.00</td>
    							</tr> -->
    							
    							<tr>
    								<td class="no-line"></td>
									<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Shipping</strong></td>
    								<td class="no-line text-right">$15</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
									<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">{{$us->ordbyr}}</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
   
</div>
@endforeach

<script src="{{url('shopnew')}}/assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="{{url('shopnew')}}/assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    <script src="{{url('shopnew')}}/assets/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="{{url('shopnew')}}/assets/ItemSlider/js/jquery.catslider.js"></script>
    <script>
        $(function () {

            $('#mi-slider').catslider();

        });
    </script>
</body>
</html>


