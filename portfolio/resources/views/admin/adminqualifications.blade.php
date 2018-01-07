@extends('admin/adminlayout')

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
			<button type="button" class="btn btn-info">Modifier</button><button type="button" class="btn btn-danger">Supprimer</button>
			<hr>
			@endforeach
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	