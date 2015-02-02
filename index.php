<?php // Connexion BDD ?>
<?php include('include/connexion.php'); 
	$page = "home";
?>

	<?php include('include/header.php') ?>

		<div class="container">

			<!-- header -->
			<header class="site-header" role="banner">
				<a href="index.php">
					<img src="img/logo-cial.svg" alt="logo TRouve ton Ciel" class="site-logo">
				</a>
			</header>

			<div class="wrapper">

				<div class="block-profil">
					<h1>Quel Partner êtes-vous ? </h1><!--
					--><div class="icon-profil icon-profil-mobilite">Le Partner Mobilité</div><!--
					--><div class="icon-profil icon-profil-expert">Le Partner Expert</div><!--
					--><div class="icon-profil icon-profil-partner">Le Partner Chasseur</div>
				</div>

				<div class="fs-form-wrap" id="fs-form-wrap">

					<form id="form-user-info" class="fs-form form-user-info clearfix" method="post" action="test.php" >
						
						<div class="form-label-item">
							<label for="nom" class="label-hidden">Nom :</label>
							<input type="text" name="nom" id="nom" placeholder="Nom"/>
						</div>

						<div class="form-label-item">
							<label for="prenom" class="label-hidden">Prénom :</label>
							<input type="text" name="prenom" id="prenom" placeholder="Prénom"/>
						</div>

						<div class="form-label-item">
							<label for="societe" class="label-hidden">Adresse :</label>
							<input type="text" name="societe" id="societe" placeholder="Société">
						</div>

						<div class="form-label-item">
							<label for="email" class="label-hidden">Email :</label>
							<input type="email" name="email"  id="email" placeholder="Email" />
						</div>

						<div class="form-label-item">
							<label for="telephone" class="label-hidden"> :</label>
							<input type="tel" name="telephone" id="telephone" placeholder="Tél"/>
						</div>

						<div class="form-label-item form-label-item--last">
							<label for="revendeur" class="error" >Est-ce que vous êtes déjà avec nous ?</label>
							<label for="revendeur" class="label-item--last">Je suis déjà revendeur Ciel</label><!--
							--><input type="radio" name="revendeur" id="revendeur-oui" value="Oui" /><!--
							--><label for="revendeur-oui" class="label-item--radio">Oui</label><!--
							--><input type="radio" name="revendeur" id="revendeur-non" value="Non" /><!--
							--><label for="revendeur-non" class="label-item--radio">Non</label>
						</div>

						<button class="fs-user-info" type="submit" value="submit">Commencer</button>
					</form><!-- /fs-form -->
				</div><!-- /fs-form-wrap -->

			</div><!-- wrapper -->

		</div><!-- /container -->

	<?php include('include/footer.php') ?>