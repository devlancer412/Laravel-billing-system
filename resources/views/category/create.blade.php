@extends('layouts.master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						<h3>Create New Category</h3>
					</div>
					@include('layouts.snippets.error-message')
					<form action="{{route('post_create_category')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" class="form-control" name="name">
						</div>
						<div class="form-group">
							<label for="">Parent Category</label>
							<select name="parent_id" id="" class="form-control">
								<option value="">--Select Category---</option>
								@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="">Status</label>
							<select name="status" class="form-control">
								<option value="1">Active</option>
								<option value="0">Inactive</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Description</label>
							<textarea name="description" class="form-control" rows="2"></textarea>
						</div>
						<input type="submit" class="btn btn-primary" value="Add">
						<input type="reset" class="btn btn-secondary" value="Reset">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection