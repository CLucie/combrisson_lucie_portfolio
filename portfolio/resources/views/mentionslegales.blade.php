@extends('layout')

@section('contenu')
<?php $page = "mentionslegales"; ?>
<!-- Body -->
@include('inc.menu')
	<div class="container contenu">
		<div class="row justify-content-center">
			<main class="col-6">
				<h2>
					Mentions Légales
				</h2>
				<h4 class="stitreml">
					Hébergement
				</h4>
				<p class="texteml text-justify">
					L’hébergement du site est réalisé par la société OVH :<br>
					2 rue Kellermann<br>
					59100 Roubaix<br>
					France
				</p>
				<h4 class="stitreml">
					Déclaration CNIL
				</h4>
				<p class="texteml text-justify">
					Ce site <span id="boldml">va faire</span> l’objet d’une déclaration auprès de la CNIL sous le numéro ___. Les informations collectées sont utilisées uniquement dans le cadre légal prévu en France pour le respect de la vie privée. Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée, vous bénéficiez d’un droit d’accès, de rectification, de suppression des informations qui vous concernent.
					<br>
					Plus d’informations sur : <a href="https://www.cnil.fr" id="linkcnil">www.cnil.fr</a>
				</p>
				<h4 class="stitreml">
					Cookies
				</h4>
				<p class="texteml text-justify">
					Afin d’améliorer et de personnaliser la navigation, des cookies peuvent être déposés sur votre ordinateur. Vous pouvez choisir de refuser ces cookies en paramettrant votre navigateur.
				</p>
			</main>
		</div>
	</div>
<!-- End Body -->
@endsection	