@extends('admin/adminlayout')

@section('contenu')
<!-- Body -->
	<!-- Main -->
	<main class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		<h3 id="titlemessage">
			Messages
		</h3>
		<!-- Message -->
		
		<div>
			@if ($message = Session::get('success'))
        	<div class="alert alert-success">
            <p>{{ $message }}</p>
        	</div>
    		@endif

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
			<a class="btn btn-danger btn-rounded supprmessage" href="#"  data-id="{{$messages->id_message}}">Supprimer</a>
			<hr>
			@endforeach
		</div>
		<!-- End Message -->
	</main>
	<!-- End Main -->
<!-- End Body -->
@endsection	