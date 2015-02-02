<?php

	session_start();

	$page = "personnalite";

	// Connexion BDD
	include('include/connexion.php');

	//================================
	//We make the bdd insertaion
	//================================

	//we check if q1 is being set
	if (isset($_POST['q1'])) {

		//We check if we have the form data info stock
		if (!empty($_SESSION['post'])){

			//we verifie that we fave the data test Post
			if (empty($_POST['q1'])
				|| empty($_POST['q2'])
				|| empty($_POST['q3'])
				|| empty($_POST['q4'])
				|| empty($_POST['q5']) ) 
			{ 
				// Setting error message
				$_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
				header("location: test.php"); // Redirecting to first page 
			} else {



				//================================
				//systeme de choix du profil
				//================================
				// we stock the post values
				$answer1 = $_POST['q1'];
				$answer2 = $_POST['q2'];
				$answer3 = $_POST['q3'];
				$answer4 = $_POST['q4'];
				$answer5 = $_POST['q5'];

				//we define variables
				$totalA = 0;
				$totalB = 0;
				$totalC = 0;
				$personalite = "";
				$reponse1 = "";
				$reponse2 = "";
				$reponse3 = "";
				$reponse4 = "";
				$reponse5 = "";
				$personaliteA = "";
				$personaliteB = "";
				$personaliteC = "";

				if ($answer1 == "A") { $totalA = $totalA + 1.2; $reponse1 = "Un geek"; }
				if ($answer1 == "B") { $totalB = $totalB + 1.2; $reponse1 = "Un technicien"; }
				if ($answer1 == "C") { $totalC = $totalC + 1.2; $reponse1 = "Un commercial";}

				if ($answer2 == "A") { $totalA = $totalA + 1; $reponse2 = "Souple"; }
				if ($answer2 == "B") { $totalB = $totalB + 1; $reponse2 = "Pédagogue"; }
				if ($answer2 == "C") { $totalC = $totalC + 1; $reponse2 = "Fonceur"; }

				if ($answer3 == "A") { $totalA = $totalA + 1; $reponse3 = "Des offres flexibles"; }
				if ($answer3 == "B") { $totalB = $totalB + 1; $reponse3 = "Des services d’accompagnement"; }
				if ($answer3 == "C") { $totalC = $totalC + 1; $reponse3 = "Des offres attractives"; }

				if ($answer4 == "A") { $totalA = $totalA + 1; $reponse4 = "Des offres toujours adaptées aux besoins évoluant des clients (sécurité des données…)"; }
				if ($answer4 == "B") { $totalB = $totalB + 1; $reponse4 = "Des formations pour vous permettre d’être le plus qualifié possible"; }
				if ($answer4 == "C") { $totalC = $totalC + 1; $reponse4 = "Des actions pour vous permettre d’augmenter votre portefeuille clients"; }

				if ($answer5 == "A") { $totalA = $totalA + 1.1; $reponse5 = "La Box Web : elle vous permet d’optimiser vos actions web (référencement, site web...)"; }
				if ($answer5 == "B") { $totalB = $totalB + 1.1; $reponse5 = "Toutes ! Je suis déjà Partenaire Major !"; }
				if ($answer5 == "C") { $totalC = $totalC + 1.1; $reponse5 = "La Box Lead : elle vous permet d’acquérir de nouveaux contacts dans votre region"; }

				if ($totalA > $totalB && $totalA > $totalC) {
					$personalite = 'Le Partner Mobilité';
					$personaliteA = $personalite;
				}
				elseif ($totalB > $totalA && $totalB > $totalC) {
					$personalite = 'Le Partner Expert';
					$personaliteB = $personalite;
				}
				elseif ($totalC > $totalA && $totalC > $totalB) {
					$personalite = 'Le Partner Chasseur';
					$personaliteC = $personalite;
				}				


				//================================
				//fetching all values posted from second page and storing it in variable
				//================================
				foreach ($_POST as $key => $value) {
					$_SESSION['post'][$key] = $value;
				}
				extract($_SESSION['post']); // Function to extract array.
		
				$sql="INSERT INTO `personalite` 
					(nom, prenom, societe, email, telephone, revendeur, q1, q2, q3, q4, q5, personalite, reponse1, reponse2, reponse3, reponse4, reponse5, reg_datetime)
				VALUES 
					('$nom', '$prenom', '$societe', '$email', '$telephone', '$revendeur', '$q1', '$q2', '$q3', '$q4', '$q5', '$personalite', '$reponse1', '$reponse2', '$reponse3', '$reponse4', '$reponse5', NOW() )";

				//-----------------------------------------------
				// On execute la insertion
				//-----------------------------------------------
				$req_personnalite= mysql_query($sql) or die(mysql_error());				
			}//end empty post
		}//end !empety session
	} else {
		header("location: index.php"); // Redirecting to first page 
	}
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

				<div class="block-profil block-profil--final">
					<h1>Vous êtes : </h1><!--
					--><div class="icon-profil icon-profil-mobilite <?php if ( $personaliteA ) { echo 'icon-profil--active'; } ?>">Le Partner Mobilité</div><!--
					--><div class="icon-profil icon-profil-expert <?php if ( $personaliteB ) { echo 'icon-profil--active'; } ?>">Le Partner Expert</div><!--
					--><div class="icon-profil icon-profil-partner <?php if ( $personaliteC ) { echo 'icon-profil--active'; } ?>">Le Partner Chasseur</div>
				</div>

				<div class="fs-form-wrap" id="fs-form-wrap">
					<div class="fs-title">
						<?php if ($req_personnalite) { 

							if ( $personaliteA ) {
								echo '<h2>Friant de nouvelles technologies, vous savez vous adapter aux nouveaux des clients qui demandent de plus en plus de mobilité, de souplesse et de sécurité.</h2>
									<p>&#10145; Proposez à vos clients les offres Flexibilité de Ciel : 2 niveaux d’abonnement mensuels sans engagement (logiciel + service) : Extraflex et Ultraflex. Ce dernier niveau inclus les offres mobiles de Ciel : Ciel Données Mobiles pour gérer à distance  et de manière sécurisée son activité comptable et commerciale et Ciel Business Mobiles pour piloter son activité à distance.</p>
									<p>&#10145; Vous êtes Partenaire Certifié Ciel, proposez ces abonnements avec le service Centre Partenaire Ciel, réservé aux Partenaires Certifiés. Vous délivrez ainsi votre propre service d’assistance  ainsi que vos prestations à valeurs ajoutées. Vous êtes rémunérés tout au long de son abonnement et réabonnement : vous augmentez vos marges ! </p>
									<p>&#10145; Vous n’êtes pas encore Partenaire Certifié Ciel ? </p>
									<ul>
										<li>Proposez les offres flexibilité en mode apporteur d’affaires. Ciel vous verse une prime la 1ere année d’abonnement de votre client et ceci à chaque nouvelle vente. </li>
										<li>Envie de vous certifier ? Des cessions sont organisées tous les mois, renseignez-vous auprès de l’un de nos conseilleurs commercial.</li>
									</ul>';
							}
							elseif ( $personaliteB ) {
								echo '<h2>Véritable technicien, vous cherchez toujours à être le plus qualifié pour pouvoir accompagner au mieux vos clients. Vous avez le profil pour assurer l’assistance directement à vos clients</h2>
									<p>&#10145; Proposez à vos clients les offres Flexibilité de Ciel : 2 niveaux d’abonnements mensuels sans engagement (logiciel + service) le service Centre Partenaire Ciel, réservé aux partenaires. Vous délivrez ainsi votre propre service d’assistance  ainsi que vos prestations à valeurs ajoutées. Vous êtes rémunérés tout au long de son abonnement et réabonnement : vous augmentez vos marges !</p>
									<p>&#10145; Vous n’êtes pas encore Partenaire Certifié Ciel ? </p>
									<ul>
										<li>Proposez les offres flexibilité en mode apporteur d’affaires. Ciel vous verse une prime la 1ere année d’abonnement de votre client et ce à chaque nouvelle vente.</li>
										<li>Envie de vous certifier ? Des cessions sont organisées tous les mois, renseignez-vous auprès de l’un de nos conseilleurs commercial.</li>
									</ul>';
							}
							elseif ( $personaliteC ) {
								echo '<h2>Commercial dans l’âme, vous êtes sans cesse en quête de nouveaux contacts pour développer votre activité.</h2>
									<p>&#10145; Proposez à vos clients les offres Flexibilité de Ciel : 2 niveaux d’abonnements mensuels sans engagement (logiciel + service), en mode apporteur d’affaires. Ciel vous verse une prime la 1ere année d’abonnement de votre client et ceci à chaque nouvelle vente</p>
									<p>&#10145; Vous souhaitez augmenter davantage vos marges ? Devenez Partenaire Certifié Ciel et proposez votre propre assistance avec le Service Centre partenaire. Des cessions sont organisées tous les mois, renseignez-vous auprès de l’un de nos conseilleurs commercial.</p>';
							}
							?>

							<a href="index.php" class="fs-user-info fs-user-info--final" >Reprendre le test</a>
						<?php } else { ?>
							<h1>Houston, we have a problem ! <br>
								Ouuppps! Nous sommes desolés, quelque chose de bizarre c'est arrivé!</h1>

							<a href="index.php" class="fs-user-info fs-user-info--final" >Reprendre le test</a>
						<?php } ?>
						<?php unset($_SESSION['post']); ?>
					</div>
				</div><!-- /fs-form-wrap -->

			</div><!-- wrapper -->

		</div><!-- /container -->

	<?php include('include/footer.php') ?>