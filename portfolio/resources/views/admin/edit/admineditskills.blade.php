@extends('admin.adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-9">
		<h3>
			Compétences
		</h3>
		<!-- Message -->
		
		<div>
			<form method="POST" action="{{route('admodifskills')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="id" value="{{$id}}">
					<div class="md-form">
						<input type="text" name="name" class="form-control" value="{{$edit[0]->name}}">
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="level" class="form-control" value="{{$edit[0]->level}}">
	    			</div>

	    			<div class="md-form">
	    				<input type="text" name="percentage" class="form-control" value="{{$edit[0]->percentage}}">
					</div>

					<div class="md-form">
						<input type="text" name="logo" class="form-control" value="{{$edit[0]->logo}}">
					</div>
				<button class="btn btn-primary btn-rounded">Valider</button>
			</form>
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	