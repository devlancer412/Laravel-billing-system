@extends('layouts.master')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				@include('layouts.snippets.message')
			</div>
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<div class="create-table">
							<h2>Create New Table</h2>
							<form action="{{route('post_create_table')}}" method="post">
								@csrf
								<div class="form-group">
									<label for="">Table Name</label>
									<input class="form-control" type="text" name="name">
								</div>
								<div class="form-group">
									<label for="">Table Capacity</label>
									<input class="form-control" type="number" name="capacity">
								</div>
								<div class="form-group">
									<label for="">Status</label>
									<select name="status" id="" class="form-control">
										<option value="1">Active</option>
										<option value="0">Inactive</option>
									</select>
								</div>
								<input class="btn btn-primary" type="submit" value="Create">
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="card">
					<div class="card-body">
						<h2>Table Details</h2>
						<table class="table">
							<thead>
								<tr>
									<th>S.N.</th>
									<th>Table Name</th>
									<th>Capacity</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@if(count($tables)>0)
									@foreach($tables as $key=>$table)
										<tr>
											<td>{{$key+1}}</td>
											<td>{{$table->name}}</td>
											<td>{{$table->capacity}}</td>
											<td>{{$table->status==1 ? 'Active' : 'Inactive'}}</td>
											<td>
												<span>
													<a href="" class="btn btn-primary" data-myname="{{$table->name}}" data-mycapacity="{{$table->capacity}}" data-mystatus="{{$table->status}}" data-table_id="{{$table->id}}" data-toggle="modal" data-target="#edit">Edit</a>
												</span>
												<span>
													<a href="" class="btn btn-danger" data-table_id="{{$table->id}}" data-toggle="modal" data-target="#delete">Delete</a>
												</span>
											</td>
										</tr>
									@endforeach
								@else
									<tr class="text-center">
										<td colspan="5">No tables available</td>
									</tr>
								@endif
							</tbody>
						</table>
						{{$tables->links()}}
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Edit Table</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="{{route('post_update_table')}}" method="post">
	        	@csrf
	        	<input type="hidden" name="table_id" id="tab_id">
	        	<div class="form-group">
	        		<label for="">Table Name</label>
	        		<input class="form-control" type="text" name="name" id="name">
	        	</div>
	        	<div class="form-group">
	        		<label for="">Capacity</label>
	        		<input class="form-control" type="text" name="capacity" id="capacity">
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
	<div class="modal fade modal-danger" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog model-sm" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title text-center" id="exampleModalLabel">Delete Table</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      
        <form action="{{route('delete_table')}}" method="post">
        	@csrf
        	<div class="modal-body">
        		<p class="text-center">
        			Are you sure you want to delete this?
        		</p>
        		<input type="hidden" name="table_id" id="table_id" value="">
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