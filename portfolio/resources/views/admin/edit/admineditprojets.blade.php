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
			@foreach ($projets as $projet)
			<h5 class="soustitre">
				Slider #{{$projet->id}}
			</h5>
			<form class="md-form">

				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="" placeholder="{{$projet->src}}">Source de l'image</label>

    			<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="" placeholder="{{$projet->alt}}">Attribut alt</label>

    			<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="" placeholder="{{$projet->title}}">Attribut title</label>
				
				<input type="text" id="diplome" class="form-control">
    			<label for="diplome" class="" placeholder="{{$projet->description}}">Description</label>
			
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