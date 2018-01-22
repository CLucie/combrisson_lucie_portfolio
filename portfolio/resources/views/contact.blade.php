@extends('layout')

@section('contenu')
<?php $page = "contact"; ?>
<!-- Body -->
	@include('inc.menu')
	<main class="container contenu">
		<div class="row align-items-center justify-content-center">
			<h4 class="text-center col-9">
				Si vous avez des questions, n'hésitez pas à me contacter en utilisant le formulaire ci-dessous. 
			</h3>
		</div>

		@if ($message = Session::get('success'))
        	<div class="alert alert-success">
            <p>{{ $message }}</p>
        	</div>
    	@endif

		<div class="row align-items-center justify-content-center">
			<div id="cardform" class="card col-xs-12 col-sm-10- col-md-8 col-lg-6">

				<!-- Form -->
				<form method="POST" action="{{route('adsendmessages')}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					    <div class="md-form">
					        <i class="fas fa-user prefix grey-text"></i>
					        <input type="text" name="name" class="form-control">
					        <label for="name">Votre nom</label>
					    </div>

					    <div class="md-form">
					        <i class="fas fa-envelope prefix grey-text"></i>
					        <input type="email" name="email" class="form-control">
					        <label for="email">Votre e-mail</label>
					    </div>

					    <div class="md-form">
					        <i class="fas fa-tag prefix grey-text"></i>
					        <input type="text" name="subject" class="form-control">
					        <label for="subject">Sujet</label>
					    </div>

					    <div class="md-form">
					        <i class="fas fa-pencil-alt prefix grey-text"></i>
					        <textarea type="text" name="message" class="md-textarea" style="height: 100px"></textarea>
					        <label for="message">Votre message</label>
					    </div>

				    <div class="text-center">
				        <button class="btn btn-custom sendmessage">Envoyer <i class="fas fa-paper-plane ml-1"></i></button>
				    </div>

				</form>
				<!-- End Form -->

			</div>
		</div>
	</main>
<!-- End Body -->
@endsection	