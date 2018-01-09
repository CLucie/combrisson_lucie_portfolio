@extends('admin.adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-9">
		<h3>
			Projets <button type="button" class="btn btn-success">Ajouter</button>
		</h3>
		<!-- Message -->
		
		<div>
			@if ($message = Session::get('success'))
        	<div class="alert alert-success">
            <p>{{ $message }}</p>
        	</div>
    		@endif

			@foreach ($projets as $projet)
			<h5 class="soustitre">
				Slider #{{$projet->id_projet}}
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
			<a class="btn btn-info btn-rounded editprojet" href="#"  data-id="{{$projet->id_projet}}">Modifier</a><a class="btn btn-danger btn-rounded supprprojet" href="#"  data-id="{{$projet->id_projet}}">Supprimer</a>
			<hr>
			@endforeach
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	