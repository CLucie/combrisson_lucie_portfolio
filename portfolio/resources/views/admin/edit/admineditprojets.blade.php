@extends('admin.adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-8">
		<h3>
			Projets
		</h3>
		<!-- Message -->
		
		<div>
			<form method="POST" action="{{route('admodifportfolio')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="id" value="{{$id}}">
					<div class="md-form">
						<input type="text" name="src" class="form-control" value="{{$edit[0]->src}}">
						<label for="src">Source de l'image (.jpg ou .png)</label>
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="alt" class="form-control" value="{{$edit[0]->alt}}">
	    				<label for="alt">Attribut alt</label>
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="title" class="form-control" value="{{$edit[0]->title}}">
	    				<label for="title">Titre</label>
					</div>

					<div class="md-form">
						<input type="text" name="description" class="form-control" value="{{$edit[0]->description}}">
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