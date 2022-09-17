@extends('shop.myaccount')
@section('title')
Dasboard User
@endsection

@section('contentuser')
                    <table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Order Id</th>
								<td>Tagihan</td>
								<td>Tanggal</td>
								<th>Status</th>
								<th>Details</th>
							</tr>
						</thead>
						<tbody>
							@foreach($orders as $item)
							<tr>
								<td>{{$no++}}</td>
								<td>{{$item->ordersidencytpe}}</td>
								<td>{{$item->ordbyr}}</td>
								<td>{{$item->created_at}}</td>
								<td>
									@if($item->ordstatus==NULL)
									<span class="label label-danger text-center">Belum Di Konfirmasi</span>
									@else
									<span class="label label-success text-center">Sudah Dikonfirmasi</span>
									@endif
								</td>
								<td>
									<a href="{{url('myaccount',[$item->id])}}">views</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
@endsection