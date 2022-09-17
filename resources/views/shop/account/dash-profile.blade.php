@extends('shop.app')
@section('title')
Beranda {{ Auth::user()->name }}
@endsection
@section('content')
<div class="container">
	<div class="row">
    <!-- NAV -->
    @include('shop.account.nav')

		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Profile User
				</div>
				<div class="panel-body">
					@include('shop.account.content-profile')
				</div>
			</div>
		</div>
	</div>
</div>
@endsection