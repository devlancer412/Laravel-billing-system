@extends('layouts.master')

@section('content')
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="top">
							<a href="{{route('user.edit_profile')}}" class="btn btn-primary float-right">Edit Profile</a>
						</div>
						<div class="clear"></div>
						@if(session('msg'))
							<div class="alert alert-success">{{session('msg')}}</div>
						@endif
						<div class="avatar my-3">
							<img src="{{asset("img/$user->avatar")}}" alt="" height="100" width="100">
							<div class="company-logo float-right">
							<img src="{{asset("img/$user->company_logo")}}" alt="" height="100" width="100">
						</div>
						</div>
						
						
						<table class="table table-bordered">
							<tr>
								<th>Name</th>
								<td>{{$user->name}}</td>
							</tr>
							<tr>
								<th>Company Name</th>
								<td>{{$user->company_name}}</td>
							</tr>
							<tr>
								<th>PAN No.</th>
								<td>{{$user->pan_no}}</td>
							</tr>
							<tr>
								<th>Email</th>
								<td>{{$user->email}}</td>
							</tr>
							<tr>
								<th>Address</th>
								<td>{{$user->address}}</td>
							</tr>
							<tr>
								<th>Contact No.</th>
								<td>{{$user->contact_no}}</td>
							</tr>
							<tr>
								<th>Details</th>
								<td>
									{{$user->company_info}}
								</td>
							</tr>
						</table>
						<br>
						<a href="" class="btn btn-primary">Back</a>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection