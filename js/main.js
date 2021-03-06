$().ready(function() {
	// validate signup form on keyup and submit
	$("#form-user-info").validate({
		rules: {
			nom: "required",
			prenom: "required",
			societe: "required",
			telephone: "required",
			revendeur: "required",
			email: {
				required: true,
				email: true
			}
		},
		messages: {
			nom: "Votre nom, s'il vous plaît",
			prenom: "Votre prénom, s'il vous plaît",
			societe: "Votre Société, s'il vous plaît",
			telephone: "Votre téléphone, s'il vous plaît",
			email: "Une adresse mail valide, s'il vous plaît",
			revendeur: "Est-ce que vous êtes déjà avec nous ?"
		}
	});
});