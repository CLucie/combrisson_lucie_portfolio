@extends('admin/adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-9">
		<h3>
			Compétences <a class="btn btn-success addcompetence" href="#">Ajouter</a>
		</h3>
		<!-- Message -->
		
		<div>
			@if ($message = Session::get('success'))
        	<div class="alert alert-success">
            <p>{{ $message }}</p>
        	</div>
    		@endif

			@foreach ($skills as $skill)
			<h5 class="soustitre">
				{{$skill->name}}
			</h5>
			<p>
				<span class="intitulechamps">Niveau :</span> {{$skill->level}}
			</p>
			<p>
				<span class="intitulechamps">Pourcentage :</span> {{$skill->percentage}}
			</p>
			<p>
				<span class="intitulechamps">Logo :</span> {{$skill->logo}}
			</p>
			<a class="btn btn-info btn-rounded editcompetence" href="#"  data-id="{{$skill->id_skill}}">Modifier</a><a class="btn btn-danger btn-rounded supprcompetence" href="#"  data-id="{{$skill->id_skill}}">Supprimer</a>
			<hr>
			@endforeach
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	