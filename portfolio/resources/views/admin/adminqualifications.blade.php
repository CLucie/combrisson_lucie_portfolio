@extends('admin.adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		<h3>
			Qualifications <a class="btn btn-success addqualif" href="#">Ajouter</a>
		</h3>
		<!-- Message -->
		
		<div>
			@if ($message = Session::get('success'))
        	<div class="alert alert-success">
            <p>{{ $message }}</p>
        	</div>
    		@endif

			@foreach ($qualif as $qualif)
			<h5 class="soustitre">
				{{$qualif->diploma}}
			</h5>
			<p>
				<span class="intitulechamps">Date de début :</span> {{$qualif->start_date}}
			</p>
			<p>
				<span class="intitulechamps">Date de fin :</span> {{$qualif->end_date}}
			</p>
			<p>
				<span class="intitulechamps">Etablissement :</span> {{$qualif->establishment}}
			</p>
			<p>
				<span class="intitulechamps">Ville :</span> {{$qualif->city}}
			</p>
			<p>
				<span class="intitulechamps">Code postal :</span> {{$qualif->zip_code}}
			</p>
			<a class="btn btn-info btn-rounded editqualif" href="#"  data-id="{{$qualif->id_qualification}}">Modifier</a><a class="btn btn-danger btn-rounded supprqualif" href="#"  data-id="{{$qualif->id_qualification}}">Supprimer</a>
			<hr>
			@endforeach
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	