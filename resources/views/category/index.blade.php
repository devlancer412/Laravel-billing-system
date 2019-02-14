@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div>
						<a href="{{route('get_create_category')}}" class="btn btn-primary float-right mb-3">Create New Category</a>
					</div>
					<div style="clear: both;"></div>
					@include('layouts.snippets.message')
					<table class="table">
						<thead>
							<tr>
								<th>S.N.</th>
								<th>Name</th>
								<th>Parent Category</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if(count($categories))
								@foreach($categories as $row=>$category)
									<tr>
										<td>{{$row+1}}</td>
										<td>{{$category->name}}</td>
										<td>{{$category->parent['name']}}</td>
										<td>{{$category->status==1 ? 'Active' : 'Inactive'}}</td>
										<td>
											<span>
												<a href="" class="btn btn-primary" data-myname="{{$category->name}}" data-myparentid="{{$category->parent['id']}}" data-mystatus="{{$category->status}}" data-category_id="{{$category->id}}" data-toggle="modal" data-target="#editCategory">Edit</a>
											</span>
											<span>
												<a href="" class="btn btn-danger" data-category_id="{{$category->id}}" data-toggle="modal" data-target="#deleteCategory">Delete</a>
											</span>
										</td>
									</tr>
								@endforeach
							@else
								<tr class="text-center">
									<td colspan="5">No category available</td>
								</tr>
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- Modal -->
	<div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="{{route('post_edit_category')}}" method="post">
	        	@csrf
	        	<input type="hidden" name="category_id" id="cat_id">
	        	<div class="form-group">
	        		<label for="">Table Name</label>
	        		<input class="form-control" type="text" name="name" id="name">
	        	</div>
	        	<div class="form-group">
	        		<label for="">Parent Category</label>
	        		<select name="parent_id" id="par_id" class="form-control">
	        			<option value="">---Select Option---</option>
	        			@foreach($categories as $category)
	        				<option value="{{$category->id}}">{{$category->name}}</option>
	        			@endforeach
	        		</select>
	        	</div>
	        	<div class="form-group">
	        		<label for="">Status</label>
	        		<select class="form-control" name="status" id="status">
	        			<option value="1">Active</option>
	        			<option value="0">Inctive</option>
	        		</select>
	        	</div>	      
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save changes</button>
			      </div>
	      	</form>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="modal fade modal-danger" id="deleteCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog model-sm" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title text-center" id="exampleModalLabel">Delete Category</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      
        <form action="{{route('delete_category')}}" method="post">
        	@csrf
        	<div class="modal-body">
        		<p class="text-center">
        			Are you sure you want to delete this?
        		</p>
        		<input type="hidden" name="category_id" id="category_id" value="">
        	</div>
        	
		      <div class="modal-footer">
		        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
		        <button type="submit" class="btn btn-danger">Yes, Delete</button>
		      </div>
      	</form>
	      
	    </div>
	  </div>
	</div>

@endsection