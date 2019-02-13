@extends('layouts.master')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="top">
							<a href="" class="btn btn-primary float-right">Back</a>
						</div>
						<div class="clear"></div>
						@include('layouts.snippets.error-message')
						<form action="{{route('user.post_edit_profile')}}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="company-name">Company Name</label>
								<input type="text" class="form-control" name="company_name" value="{{$user->company_name}}">
							</div>
							<div class="form-group">
								<label for="company-logo">Company Logo</label>
								<input type="file" class="form-control" name="company_logo" value="{{$user->company_logo}}">
							</div>
							<div class="form-group">
								<label for="user-name">User Name</label>
								<input type="text" class="form-control" name="name" value="{{$user->name}}">
							</div>
							<div class="form-group">
								<label for="user-avatar">User Avatar</label>
								<input type="file" class="form-control" name="avatar" value="{{$user->avatar}}">
							</div>
							<div class="form-group">
								<label for="PAN No.">PAN No.</label>
								<input type="text" class="form-control" name="pan_no" value="{{$user->pan_no}}">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" value="{{$user->email}}">
							</div>
							<div class="form-group">
								<label for="address">Address</label>
								<input type="text" class="form-control" name="address" value="{{$user->address}}">
							</div>
							<div class="form-group">
								<label for="contact-number">Cotact No.</label>
								<input type="text" class="form-control" name="contact_no" value="{{$user->contact_no}}">
							</div>
							<div class="form-group">
								<label for="about-company">About Company</label>
								<textarea name="company_info" class="form-control" id="" cols="30" rows="10">{{$user->company_info}}
								</textarea>
							</div>
							<span>
								<input type="submit" class="btn btn-primary" value="Submit">
							</span>
							<span>
								<input type="reset" class="btn btn-secondary" value="Reset">
							</span>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection