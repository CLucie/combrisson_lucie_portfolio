@extends('admin.adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-xs-13 col-sm-13 col-md-8 col-lg-8">
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
						<label for="diploma">Diplôme</label>
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="start_date" class="form-control" value="{{$edit[0]->start_date}}">
	    				<label for="start_date">Année de début</label>
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="end_date" class="form-control" value="{{$edit[0]->end_date}}">
	    				<label for="end_date">Année de fin</label>
					</div>

					<div class="md-form">
						<input type="text" name="establishment" class="form-control" value="{{$edit[0]->establishment}}">
						<label for="establishment">Établissement</label>
					</div>

					<div class="md-form">
						<input type="text" name="city" class="form-control" value="{{$edit[0]->city}}">
						<label for="city">Ville</label>
					</div>

					<div class="md-form">
						<input type="text" name="zip_code" class="form-control" value="{{$edit[0]->zip_code}}">
						<label for="zip_code">Code Postal</label>
					</div>
				<button class="btn btn-primary btn-rounded">Valider</button>
			</form>
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	