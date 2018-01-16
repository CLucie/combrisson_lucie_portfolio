@extends('admin.adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-9">
		<h3>
			Qualifications
		</h3>
		<!-- Message -->
		
		<div>
			<form method="POST" action="{{route('admodifqualification')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="id" value="{{$id}}">
					<div class="md-form">
						<input type="text" name="diploma" class="form-control" value="{{$edit[0]->diploma}}">
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="start_date" class="form-control" value="{{$edit[0]->start_date}}">
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="end_date" class="form-control" value="{{$edit[0]->end_date}}">
					</div>

					<div class="md-form">
						<input type="text" name="establishment" class="form-control" value="{{$edit[0]->establishment}}">
					</div>

					<div class="md-form">
						<input type="text" name="city" class="form-control" value="{{$edit[0]->city}}">
					</div>

					<div class="md-form">
						<input type="text" name="zip_code" class="form-control" value="{{$edit[0]->zip_code}}">
					</div>
				<button class="btn btn-primary btn-rounded">Valider</button>
			</form>
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	