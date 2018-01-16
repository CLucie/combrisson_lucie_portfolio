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
			<form method="POST" action="{{route('adstorequalification')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="md-form">
						<input type="text" name="diploma" class="form-control" value="">
						<label for="diploma">Diplôme</label>
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="start_date" class="form-control" value="">
	    				<label for="start_date">Année de début</label>
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="end_date" class="form-control" value="">
	    				<label for="end_date">Année de fin</label>
					</div>

					<div class="md-form">
						<input type="text" name="establishment" class="form-control" value="">
						<label for="establishment">Établissement</label>
					</div>

					<div class="md-form">
						<input type="text" name="city" class="form-control" value="">
						<label for="city">Ville</label>
					</div>

					<div class="md-form">
						<input type="text" name="zip_code" class="form-control" value="">
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