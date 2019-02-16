@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						<h3>Setting</h3>
					</div>
					@include('layouts.snippets.message')
					@include('layouts.snippets.error-message')
					<form action="{{route('post_update_setting')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="">Service Charge</label>
							<input type="text" class="form-control" name="service_charge" value="">
						</div>
						<div class="form-group">
							<label for="">VAT Reg. No.</label>
							<input type="text" class="form-control" name="vat_no" value="">
						</div>
						<div class="form-group">
							<label for="">VAT %</label>
							<input type="number" class="form-control" name="vat_charge" value="">
						</div>
						<input class="btn btn-primary" type="submit" value="Update">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection