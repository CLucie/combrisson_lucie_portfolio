@extends('adminlayout')

@section('contenu')
<!-- Body -->
<!-- Form login -->
<div class="card-body col-4 justify-content-center">
	<form>
	    <p class="h5 text-center mb-4">Connexion</p>

	    <div class="md-form">
	        <i class="fa fa-envelope prefix grey-text"></i>
	        <input type="text" id="defaultForm-email" class="form-control">
	        <label for="defaultForm-email">E-mail</label>
	    </div>

	    <div class="md-form">
	        <i class="fa fa-lock prefix grey-text"></i>
	        <input type="password" id="defaultForm-pass" class="form-control">
	        <label for="defaultForm-pass">Mot de passe</label>
	    </div>

	    <div class="text-center">
	        <button class="btn btn-default">Connexion</button>
	    </div>
	</form>
</div>
<!-- Form login -->
<!-- End Body -->
@endsection	