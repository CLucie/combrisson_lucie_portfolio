@extends('admin.adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		<h3>
			Projets <a class="btn btn-success addprojet" href="#">Ajouter</a>
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