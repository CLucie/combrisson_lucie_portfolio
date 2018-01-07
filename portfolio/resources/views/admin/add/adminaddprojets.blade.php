@extends('adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-9">
		<h3>
			Projets <button type="button" class="btn btn-success">Ajouter</button>
		</h3>
		<!-- Message -->
		
		<div>
			<form class="md-form">

				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="">Source de l'image</label>

    			<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="">Attribut alt</label>

    			<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="">Attribut title</label>
				
				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="">Description</label>
			
				<button type="submit" class="btn btn-info">Valider</button>
			</form>
			<hr>
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	