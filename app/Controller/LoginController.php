<?php

namespace Controller;

use \W\Controller\Controller;

class LoginController extends Controller
{

	public function login()
	{
		$manager = new \Manager\UserManager();

		// AU CLIC SUR BOUTON D'INSCRIPTION
		
		if (isset($_POST['inscription'])) 
		{
			$errors = [];	
			
			// CONTROLE DES CHAMPS DU FORMULAIRE D'INSCRIPTION

			if (empty($_POST['prenom'])) {
				$errors['prenom'] = "Veuillez renseigner votre prénom";
			}


			if (empty($_POST['nom'])) {
				$errors['nom'] = "Veuillez renseigner votre nom";
			}

			// CONTROLE DE L'EXISTENCE DU USER

			$lastnameLower = strtolower($_POST['nom']);
			$firstnameLower = strtolower($_POST['prenom']);

			$users = $manager->checkInscription($lastnameLower, $firstnameLower);


			if ( !empty($_POST['prenom']) && !empty($_POST['nom']) ) 
			{
				if (!$users) 
				{
				$errors['combinaison'] = "Cette combinaison de nom et prénom n'existe pas, vérifiez bien l'orthographe. Votre nom est prénom est le même qu'indiqué sur l'enveloppe du faire part.";
				}
				else if($users) 
				{
					
					$_SESSION["lastname"] = $_POST['nom'];
					$_SESSION["firstname"] = $_POST['prenom'];

					//Insertion Adriana, recupération ID
					$rid = $_SESSION['id'];
					$roles = $manager->get_user_roles($rid);

					$_SESSION["roles"] = $roles;
				

					$this->redirectToRoute('profil');

				}

			}

			$this->show('default/login', ['errors' => $errors]);

		}

		// AU CLIC SUR BOUTON DE CONNEXION

		if (isset($_POST['connexion'])) 
		{
			$errorsCo = [];	
			
			// CONTROLE DES CHAMPS DU FORMULAIRE D'INSCRIPTION

			if (empty($_POST['email'])) {
				$errorsCo['email'] = "Veuillez renseigner votre email";
			}


			if (empty($_POST['password'])) {
				$errorsCo['password'] = "Veuillez renseigner votre mot de passe";
			}

			// CONTROLE DE L'EXISTENCE DU USER

			$user = $manager->checkConnexion($_POST['email'], $_POST['password']);

			if ( !empty($_POST['email']) && !empty($_POST['password']) ) 
			{
				if (!$user) 
				{
					$errorsCo['connexion'] = "Cette email ou password n'existe pas.";
				}
				else if($user) 
				{

					$_SESSION["lastname"] = $user['lastname'];
					$_SESSION["firstname"] = $user['firstname'];
					$_SESSION["id"] = $user['id'];

					//Insertion Adriana, recupération ID
					$rid = $_SESSION['id'];
					$roles = $manager->get_user_roles($rid);

					$_SESSION["roles"] = $roles;


					$this->redirectToRoute('home');

				}

			}

			$this->show('default/login', ['errorsCo' => $errorsCo]);

		}

		// AFFICHAGE DE LA PAGE LOGIN QUOI QU'IL ARRIVE

		$this->show('default/login');


	}

	public function profil()
	{

		$manager = new \Manager\UserManager();



		if (isset($_POST['btnCreateProfile'])) 
		{
			$errors = [];

			// CONTROLE DES CHAMPS DU FORMULAIRE D'INSCRIPTION

			if (empty($_POST['prenom'])) 
			{
				$errors['prenom'] = "Veuillez renseigner votre prénom.";
			}


			if (empty($_POST['nom'])) 
			{
				$errors['nom'] = "Veuillez renseigner votre nom.";
			}

			if (empty($_POST['email'])) 
			{
				$errors['email'] = "Veuillez renseigner votre email.";
			}

			if (empty($_POST['password'])) 
			{
				$errors['password'] = "Veuillez renseigner votre mot de passe.";
			}

			if (!isset($_POST['rsvpFr'])) 
			{
				$errors['rsvpFr'] = "Pouvez-vous nous indiquer votre venue. Vous pourrez modifier cette information par la suite.";
			}

			if (!isset($_POST['rsvpMa'])) 
			{
				$errors['rsvpMa'] = "Pouvez-vous nous indiquer votre venue. Vous pourrez modifier cette information par la suite.";
			}

			if (!isset($_POST['regime'])) 
			{
				$errors['regime'] = "Veuillez renseigner si vous avez un régime alimentaire spécifique ou non.";
			}

			if (isset($_POST['regime']) && $_POST['regime'] == "1") 
			{
				if (empty($_POST['aliment_specs'])) 
				{
					$errors['aliment_specs'] = "Veuillez renseigner vos restrictions alimentaires";
				}
			}


			if (!isset($_POST['enfants'])) 
			{
				$errors['enfants'] = "Veuillez renseigner si vous venez accompagner d'enfant(s)";
			}

			if (isset($_POST['enfants']) && $_POST['enfants'] == "1") 
			{
				if (empty($_POST['enfants_name'])) 
				{
					$errors['enfants_name'] = "Veuillez renseigner les prénoms de votre(vos) enfant(s).";
				}
			}



			if (empty($errors)) 
			{
				$lastnameLower = strtolower($_POST['nom']);
				$firstnameLower = strtolower($_POST['prenom']);

				$users = $manager->checkInscription($lastnameLower, $firstnameLower);

				$data = [
					'lastname' => $lastnameLower,
					'firstname' => $firstnameLower,
					'email' => $_POST['email'],
					'password' => $_POST['password'],
					'children' => $_POST['enfants'],
					'diet' => $_POST['regime'],
					'aliments' => $_POST['aliment_specs'],
					'rsvpMa' => $_POST['rsvpMa'],
					'rsvpFr' => $_POST['rsvpFr'],
				];
					
				$result = $manager->update($data, $users['id']);



				$this->redirectToRoute('home');
			}
			else
			{

				$this->show('default/profil', ['errors' => $errors]);
			}

		}

		// AFFICHAGE DE LA PAGE PROFIL QUOI QU'IL ARRIVE
		
		$this->show('default/profil');

	}
	

	public function mon_profil()
	{
		$manager = new \Manager\UserManager();
		$children = new \Manager\ChildManager();


		$profil = $manager->findGuestByNames($_SESSION['firstname'], $_SESSION['lastname']);


		if (isset($_POST['btnChangeProfile'])) 
		{
			$errors = [];

			// CONTROLE DES CHAMPS DU FORMULAIRE D'INSCRIPTION

			if (empty($_POST['prenom'])) 
			{
				$errors['prenom'] = "Veuillez renseigner votre prénom.";
			}


			if (empty($_POST['nom'])) 
			{
				$errors['nom'] = "Veuillez renseigner votre nom.";
			}

			if (empty($_POST['email'])) 
			{
				$errors['email'] = "Veuillez renseigner votre email.";
			}

			if (empty($_POST['password'])) 
			{
				$errors['password'] = "Veuillez renseigner votre mot de passe.";
			}

			if (!isset($_POST['rsvpFr'])) 
			{
				$errors['rsvpFr'] = "Pouvez-vous nous indiquer votre venue.";
			}

			if (!isset($_POST['rsvpMa'])) 
			{
				$errors['rsvpMa'] = "Pouvez-vous nous indiquer votre venue.";
			}

			if (!isset($_POST['regime'])) 
			{
				$errors['regime'] = "Veuillez renseigner si vous avez un régime alimentaire spécifique ou non.";
			}

			if (isset($_POST['regime']) && $_POST['regime'] == "1") 
			{
				if (empty($_POST['aliment_specs'])) 
				{
					$errors['aliment_specs'] = "Veuillez renseigner vos restrictions alimentaires";
				}
			}


			if (!isset($_POST['enfants'])) 
			{
				$errors['enfants'] = "Veuillez renseigner si vous venez accompagner d'enfant(s).";
			}

			if (isset($_POST['enfants']) && $_POST['enfants'] == "1") 
			{
				if (empty($_POST['child1Prenom']) || empty($_POST['child1Nom'])) 
				{
					$errors['enfants_name'] = "Veuillez renseigner le(s) nom(s) et prénom(s) de votre(vos) enfant(s)";
				}
			}



			if (empty($errors)) 
			{
				$lastnameLower = strtolower($_POST['nom']);
				$firstnameLower = strtolower($_POST['prenom']);

				$users = $manager->checkInscription($lastnameLower, $firstnameLower);

				$data = [
					'lastname' => $lastnameLower,
					'firstname' => $firstnameLower,
					'email' => $_POST['email'],
					'password' => $_POST['password'],
					'children' => $_POST['enfants'],
					'diet' => $_POST['regime'],
					'aliments' => $_POST['aliment_specs'],
					'musique' => $_POST['musique'],
					'rsvpMa' => $_POST['rsvpMa'],
					'rsvpFr' => $_POST['rsvpFr'],
					'rsvpFr' => $_POST['rsvpFr'],
					'ChildLastname1' => $_POST['child1Nom'],
					'ChildFirstname1' => $_POST['child1Prenom'],
					'ChildLastname2' => $_POST['child2Nom'],
					'ChildFirstname2' => $_POST['child2Prenom'],
					'ChildLastname3' => $_POST['child3Nom'],
					'ChildFirstname3' => $_POST['child3Prenom'],
				];
					
				$result = $manager->update($data, $users['id']);





				$this->redirectToRoute('home');
			}
			else
			{

				$this->show('default/mon_profil', ['errors' => $errors, 'profil' => $profil]);
			}

		}

		// AFFICHAGE DE LA PAGE PROFIL QUOI QU'IL ARRIVE
		
		$this->show('default/mon_profil', ['profil' => $profil]);

	}


}