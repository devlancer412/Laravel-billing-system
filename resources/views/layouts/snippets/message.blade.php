@if(session('msg'))
	<div class="alert alert-success">
		{{session('msg')}}
	</div>
@endif