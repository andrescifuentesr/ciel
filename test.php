<?php
	// Connexion BDD
	// include('include/connexion.php');
	session_start();

	$page = "test";

	//we check if the first data form was full filled
	if (isset($_POST['nom'])) {
		if (empty($_POST['nom'])
		|| empty($_POST['prenom'])
		|| empty($_POST['societe'])
		|| empty($_POST['email'])
		|| empty($_POST['telephone']) ) { 
			// Setting error message
			$_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
			header("location: index.php"); // Redirecting to first page 
		} else {

			//fetching all data-answers posted from second page and storing it in variable
			foreach ($_POST as $key => $value) {
				$_SESSION['post'][$key] = $value;
			}
		}
	}
?>

	<?php include('include/header.php') ?>

		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>Project Worksheet</h1>
					<div class="codrops-top">
						<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/NotificationStyles/"><span>Previous Demo</span></a>
						<a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19520"><span>Back to the Codrops Article</span></a>
						<a class="codrops-icon codrops-icon-info" href="#"><span>This is a demo for a fullscreen form</span></a>
					</div>
				</div>
				<form id="form-user-test" class="fs-form fs-form-full" method="post" action="personnalite.php" autocomplete="off" >
					<ol class="fs-fields">
						<!-- Question 1 -->
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q1">1. Vous vous définissez plutôt comme :</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q1a" name="q1" type="radio" value="B" data-answer="Un technicien" required/><label for="q1a" class="radio-conversion">Un technicien</label></span>
								<span><input id="q1b" name="q1" type="radio" value="A" data-answer="Un geek"/><label for="q1b" class="radio-social">Un geek</label></span>
								<span><input id="q1c" name="q1" type="radio" value="C" data-answer="Un commercial"/><label for="q1c" class="radio-mobile">Un commercial</label></span>
							</div>
						</li>
						<!-- Question 2 -->
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q2">2. Laquelle de ses qualité vous correspond le mieux</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q2a" name="q2" type="radio" value="B" data-answer="Pédagogue" required/><label for="q2a" class="radio-conversion">Pédagogue</label></span>
								<span><input id="q2b" name="q2" type="radio" value="C" data-answer="Fonceur"/><label for="q2b" class="radio-social">Fonceur</label></span>
								<span><input id="q2c" name="q2" type="radio" value="A" data-answer="Souple"/><label for="q2c" class="radio-mobile">Souple</label></span>
							</div>
						</li>
						<!-- Question 3 -->
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3">3. Selon vous, que recherchent le plus les clients en terme d’offres commerciales ?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q3a" name="q3" type="radio" value="A" data-answer="Des offres flexibles" required/><label for="q3a" class="radio-conversion">Des offres flexibles</label></span>
								<span><input id="q3b" name="q3" type="radio" value="C" data-answer="Des offres attractives"/><label for="q3b" class="radio-social">Des offres attractives</label></span>
								<span><input id="q3c" name="q3" type="radio" value="B" data-answer="Des services d’accompagnement"/><label for="q3c" class="radio-mobile">Des services d’accompagnement</label></span>
							</div>
						</li>
						<!-- Question 4 -->
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q4">4. En tant que revendeur de logiciels, que doit vous proposer l’éditeur avec lequel vous collaborez</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q4a" name="q4" type="radio" value="A" data-answer="Des offres toujours adaptées aux besoins évoluant des clients (sécurité des données…)" required/><label for="q4a" class="radio-conversion">Des offres toujours adaptées aux besoins évoluant des clients (sécurité des données…)</label></span>
								<span><input id="q4b" name="q4" type="radio" value="C" data-answer="Des actions pour vous permettre d’augmenter votre portefeuille clients"/><label for="q4b" class="radio-social">Des actions pour vous permettre d’augmenter votre portefeuille clients</label></span>
								<span><input id="q4c" name="q4" type="radio" value="B" data-answer="des formations pour vous permettre d’être le plus qualifié possible"/><label for="q4c" class="radio-mobile">Des formations pour vous permettre d’être le plus qualifié possible</label></span>
							</div>
						</li>
						<!-- Question 5 -->
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q5">5. Si vous étiez Partenaire Certifié Major Ciel, quelle est la Box marketing que vous aimeriez mettre en place ?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q5a" name="q5" type="radio" value="C" data-answer="La Box Lead : elle vous permet d’acquérir de nouveaux contacts dans votre region" required/><label for="q5a" class="radio-conversion">La Box Lead : elle vous permet d’acquérir de nouveaux contacts dans votre</label></span>
								<span><input id="q5b" name="q5" type="radio" value="A" data-answer="La Box Web : elle vous permet d’optimiser vos actions web (référencement, site web...)"/><label for="q5b" class="radio-social">La Box Web : elle vous permet d’optimiser vos actions web (référencement, site</label></span>
								<span><input id="q5c" name="q5" type="radio" value="B" data-answer="Toutes ! Je suis déjà Partenaire Major !"/><label for="q5c" class="radio-mobile">Toutes ! Je suis déjà Partenaire Major</label></span>
							</div>
						</li>

					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit" data-answer="submit">Send answers</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->

		</div><!-- /container -->

	<?php include('include/footer.php') ?>