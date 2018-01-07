@extends('admin/adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-10">
		<h3>
			Projets <button type="button" class="btn btn-success">Ajouter</button>
		</h3>
		<!-- Message -->
		
		<div>
			@foreach ($projets as $projet)
			<h5 class="soustitre">
				Slider #{{$projet->id}}
			</h5>
			<p>
				<span class="intitulechamps">Source de l'image :</span> {{$projet->src}}
			</p>
			<p>
				<span class="intitulechamps">Attribut alt :</span> {{$projet->alt}}
			</p>
			<p>
				<span class="intitulechamps">Attribut title :</span> {{$projet->title}}
			</p>
			<p>
				<span class="intitulechamps">Description :</span> {{$projet->description}}
			</p>
			<button type="button" class="btn btn-info">Modifier</button><button type="button" class="btn btn-danger">Supprimer</button>
			<hr>
			@endforeach
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	