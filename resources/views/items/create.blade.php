@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						<h3>Create New Item</h3>
					</div>
					@include('layouts.snippets.error-message')
					<form action="{{route('post_create_item')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Image</label>
							<input type="file" name="image" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Category</label>
							<select name="category_id" id="" class="form-control">
								<option value="">---Select a Category---</option>
								@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="">Option</label>
							<div class="form-check">
							  	<input class="form-check-input" type="radio" name="option" value="">
							  	None
							</div>
							<div class="form-check">
							  	<input class="form-check-input" type="radio" name="option" value="veg">
							  	Veg
							</div>
							<div class="form-check">
							  	<input class="form-check-input" type="radio" name="option" value="chicken">
							  	Chicken
							</div>
							<div class="form-check">
							  	<input class="form-check-input" type="radio" name="option" value="mutton">
							  	Mutton
							</div>
							<div class="form-check">
							  	<input class="form-check-input" type="radio" name="option" value="buff">
							  	Buff
							</div>
						</div>
						<div class="from-group">
							<label for="">Price (Rs.)</label>
							<input type="number" name="price" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Status</label>
							<select name="status" id="" class="form-control">
								<option value="1">Active</option>
								<option value="0">Inactive</option>
							</select>
						</div>	
						<br>
						<input type="submit" class="btn btn-primary" value="Add">
						<input type="reset" class="btn btn-secondary" value="Reset">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection