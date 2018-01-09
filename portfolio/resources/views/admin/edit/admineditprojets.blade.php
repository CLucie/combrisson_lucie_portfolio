@extends('admin.adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-9">
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
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="alt" class="form-control" value="{{$edit[0]->alt}}">
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="title" class="form-control" value="{{$edit[0]->title}}">
					</div>

					<div class="md-form">
						<input type="text" name="description" class="form-control" value="{{$edit[0]->description}}">
					</div>
				<button>Valider</button>
			</form>
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	