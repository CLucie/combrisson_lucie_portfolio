$(document).ready(function(){

	// Delete message
	$(".supprmessage").click(function(){
		if(confirm("Voulez vous vraiment supprimer le message ?")){
			document.location="/admin/messages/delete?id="+$(this).attr("data-id");
	}
	});
	// Delete projet
	$(".supprprojet").click(function(){
		if(confirm("Voulez vous vraiment supprimer le projet ?")){
			document.location="/admin/projets/delete?id="+$(this).attr("data-id");
	}
	});
	// Delete qualification
	$(".supprqualif").click(function(){
		if(confirm("Voulez vous vraiment supprimer la qualification ?")){
			document.location="/admin/qualifications/delete?id="+$(this).attr("data-id");
	}
	});
	// Delete compétence
	$(".supprcompetence").click(function(){
		if(confirm("Voulez vous vraiment supprimer la compétence ?")){
			document.location="/admin/competences/delete?id="+$(this).attr("data-id");
	}
	});


	// Edit projet
	$(".editprojet").click(function(){
		if(confirm("Voulez vous vraiment modifier le projet ?")){
			document.location="/admin/projets/edit?id="+$(this).attr("data-id");
	}
	});
	// Edit qualification
	$(".editqualif").click(function(){
		if(confirm("Voulez vous vraiment modifier la qualification ?")){
			document.location="/admin/qualifications/edit?id="+$(this).attr("data-id");
	}
	});
	// Edit compétence
	$(".editcompetence").click(function(){
		if(confirm("Voulez vous vraiment modifier la compétence ?")){
			document.location="/admin/competences/edit?id="+$(this).attr("data-id");
	}
	});


	// Ajout projet
	$(".addprojet").click(function(){
		if(confirm("Voulez vous vraiment ajouter un projet ?")){
			document.location="/admin/projets/add";
	}
	});
	// Ajout qualification
	$(".addqualif").click(function(){
		if(confirm("Voulez vous vraiment ajouter une qualification ?")){
			document.location="/admin/qualifications/add";
	}
	});
	// Ajout compétence
	$(".addcompetence").click(function(){
		if(confirm("Voulez vous vraiment ajouter une compétence ?")){
			document.location="/admin/competences/add";
	}
	});


	



});