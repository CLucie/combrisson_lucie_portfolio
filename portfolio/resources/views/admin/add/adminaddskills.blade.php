@extends('admin.adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-xs-13 col-sm-13 col-md-8 col-lg-8">
		<h3>
			Compétences
		</h3>
		<!-- Message -->
		
		<div>
			<form method="POST" action="{{route('adstoreskills')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="md-form">
						<input type="text" name="name" class="form-control" value="">
						<label for="name">Nom</label>
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="level" class="form-control" value="">
	    				<label for="level">Niveau/4</label>
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="percentage" class="form-control" value="">
	    				<label for="percentage">Pourcentage</label>
					</div>

					<div class="md-form">
						<input type="text" name="logo" class="form-control" value="">
						<label for="logo">Logo - Non utilisé pour l'instant</label>
					</div>
				<button class="btn btn-primary btn-rounded">Valider</button>
			</form>
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	