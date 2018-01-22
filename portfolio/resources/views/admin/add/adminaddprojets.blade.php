@extends('admin.adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-xs-13 col-sm-13 col-md-8 col-lg-8">
		<h3>
			Projets
		</h3>
		<!-- Message -->
		
		<div>
			<form method="POST" action="{{route('adstoreportfolio')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="md-form">
						<input type="text" name="src" class="form-control" value="">
						<label for="src">Source de l'image (.jpg ou .png)</label>
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="alt" class="form-control" value="">
	    				<label for="alt">Attribut alt</label>
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="title" class="form-control" value="">
	    				<label for="title">Titre</label>
					</div>

					<div class="md-form">
						<input type="text" name="description" class="form-control" value="">
						<label for="description">Description</label>
					</div>
				<button class="btn btn-primary btn-rounded">Valider</button>
			</form>
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	