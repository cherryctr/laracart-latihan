@extends('shop.app')
@section('title')
terimakasih
@endsection
@section('content')
<div class="container">
    <div class="row">
    
        @if($message = Session::get('sukses'))
			<p class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ $message }}</p>
			@endif
        <h1 class="text-center"></h1>
    </div>
</div>
@endsection