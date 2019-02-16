@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						<h3>Items List</h3>
					</div>
					<a href="{{route('get_create_item')}}" class="btn btn-primary float-right">Add New Item</a>
					<div style="clear: both"></div>
					<br>
					@include('layouts.snippets.message')
					<table class="table">
						<thead>
							<th>S.N.</th>
							<th>Name</th>
							<th>Image</th>
							<th>Category</th>
							<th>Veg/Non-veg</th>
							<th>Price</th>
							<th>Action</th>
						</thead>
						<tbody>
							@if(count($items))
								@foreach($items as $key=>$item)
									<tr>
										<td>{{$key+1}}</td>
										<td>{{$item->name}}</td>
										<td>
											<img src="{{asset("img/items/$item->image")}}" alt="" width="60" height="60">
										</td>
										<td>{{$item->category['name']}}</td>
										<td>{{$item->option}}</td>
										<td>{{$item->price}}</td>
										<td>
											<span>
												<a href="{{route('get_update_item', ['item'=>$item->id])}}" class="btn btn-primary">Edit</a>
											</span>
											<span>
												<a href="" class="btn btn-danger">Delete</a>
											</span>
										</td>
									</tr>
								@endforeach
							@else
								<tr>
									<td colspan="6" class="text-center">No items available</td>
								</tr>
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection