<?php // Connexion BDD ?>
<?php include('include/connexion.php'); 
	$page = "home";
?>

	<?php include('include/header.php') ?>

		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">

				<form id="form-user-info" class="fs-form fs-form-full" method="post" action="test.php" >
					
					<div>
						<label for="nom">Nom :</label>
						<input type="text" name="nom" id="nom"/>
					</div>

					<div>
						<label for="prenom">Prénom :</label>
						<input type="text" name="prenom" id="prenom"/>
					</div>

					<div>
						<label for="societe">Adresse :</label>
						<input type="text" name="societe" id="societe">
					</div>

					<div>
						<label for="email">Email :</label>
						<input type="email" name="email"  id="email" />
					</div>

					<div>
						<label for="telephone">Téléphone :</label>
						<input type="tel" name="telephone" id="telephone"/>
					</div>

					<button class="fs-user-info" type="submit" value="submit">Commencer</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->

		</div><!-- /container -->

	<?php include('include/footer.php') ?>