@extends('adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-9">
		<h3>
			Qualifications <button type="button" class="btn btn-success">Ajouter</button>
		</h3>
		<!-- Message -->
		
		<div>
			@foreach ($qualif as $qualif)
			<form class="md-form">

				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="" placeholder="{{$qualif->diploma}}">Titre de la qualification</label>

    			<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="" placeholder="{{$qualif->start_date}}">Année de début</label>

    			<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="" placeholder="{{$qualif->end_date}}">Année de fin</label>
				
				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="" placeholder="{{$qualif->establishment}}">Etablissement</label>
				
				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="" placeholder="{{$qualif->city}}">Ville</label>
				
				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="" placeholder="{{$qualif->zip_code}}">Code postal</label>
			
				<button type="submit" class="btn btn-info">Valider</button>
			</form>
			<hr>
			@endforeach
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	