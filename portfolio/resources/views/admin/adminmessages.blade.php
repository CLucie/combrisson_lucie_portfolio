@extends('admin/adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-9">
		<h3>
			Messages
		</h3>
		<!-- Message -->
		
		<div>
			@foreach ($messages as $messages)
			<h5 class="soustitre">
				{{$messages->subject}}
			</h5>
			<p>
				<span class="intitulechamps">De :</span> {{$messages->name}} <span class="intitulechamps">&#8594;</span> {{$messages->email}}
			</p>
			<p>
				<span class="intitulechamps">Date :</span> {{$messages->created_at}}
			</p>
			<p>
				<span class="intitulechamps">Message :</span> {{$messages->message}}
			</p>
			<button type="button" class="btn btn-danger btn-rounded">Supprimer</button>
			<hr>
			@endforeach
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	