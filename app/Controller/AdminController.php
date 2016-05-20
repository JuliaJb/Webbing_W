<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{


	public function admin()
	{	
		$this->show('admin/admin');
	}

	public function statistiques()
	{	
		$manager = new \Manager\UserManager();
		$nbInvites = $manager->guestCount();
		$yesGuestCountMaurice = $manager->yesGuestCountMaurice();
		$noGuestCountMaurice = $manager->noGuestCountMaurice();
		$yesGuestCountFrance = $manager->yesGuestCountFrance();
		$noGuestCountFrance = $manager->noGuestCountFrance();

		
		
		$this->show('admin/statistiques', [
				'nbInvites' => $nbInvites,
				'yesGuestCountMaurice' => $yesGuestCountMaurice,
				'noGuestCountMaurice' => $noGuestCountMaurice,
				'yesGuestCountFrance' => $yesGuestCountFrance,
				'noGuestCountFrance' => $noGuestCountFrance
			]);
	}

	public function contact_invites()
	{	

		$manager = new \Manager\UserManager();
		$invites = $manager->findAll($orderBy = "1", $orderDir = "ASC");
		$emailMaurice = $manager->get_emails_maurice();
		$emailFrance = $manager->get_emails_france();

		$listeEmailMa = "";
		$listeEmailFr = "";

		foreach ($emailMaurice as $key => $value) {
			$listeEmailMa .= $emailMaurice[$key]['email'].", ";
		}

		foreach ($emailFrance as $key => $value) {
			$listeEmailFr .= $emailFrance[$key]['email'].", ";
		}


		if (isset($_POST['envoyer'])) {

			$message = "";
			
			if( empty($_POST['objet']) || empty($_POST['contenu']) )
			{
				$message = "No arguments Provided!";

				$this->show('admin/contact_invites', ['message' => $message]);
			}
			else
			{
				$objet = $_POST['objet'];
				$contenu = $_POST['contenu'];


				if ( isset($_POST['groupeMa']) && isset($_POST['groupeMa']) ) {
					$to = $listeEmailMa.$listeEmailFr;
				}
				else if (isset($_POST['groupeMa'])) {
					$to = $listeEmailMa;
				}
				else if (isset($_POST['groupeFr'])) {
					$to = $listeEmailFr;
				}


				$email_subject = $objet;
				$email_body = $contenu;
				$headers = "From: noreply@julia-jacob.com\n"; 
				$headers .= "Reply-To:";	
				mail($to,$email_subject,$email_body,$headers);

				$message = "Votre message a bien été envoyé :)";

				$this->show('admin/contact_invites', ['message' => $message]);		
			}	
				

			$this->show('admin/contact_invites', ['message' => $message]);

		}




		$this->show('admin/contact_invites');
	}

	public function liste_invites()
	{	
		$manager = new \Manager\UserManager();
		$invites = $manager->findAll($orderBy = "1", $orderDir = "ASC");

		$this->show('admin/liste_invites', ['invites' => $invites]);
	}

	public function maurice()
	{	
		$manager = new \Manager\UserManager();
		$invitesOui = $manager->yesAnswerMaurice();
		$invitesNon = $manager->noAnswerMaurice();

		$this->show('admin/maurice', ['invitesOui' => $invitesOui, 'invitesNon' => $invitesNon]);
	}

	public function france()
	{	
		$manager = new \Manager\UserManager();
		$invitesOui = $manager->yesAnswerFrance();
		$invitesNon = $manager->noAnswerFrance();

		$this->show('admin/france', ['invitesOui' => $invitesOui, 'invitesNon' => $invitesNon]);
	}

	public function profil_invites()
	{	
		$manager = new \Manager\UserManager();
		$invites = $manager->findAll($orderBy = "1", $orderDir = "ASC");

		$isvisible = "novisible";
		$firstname = "";
		$lastname = "";

		// AU CLIC SUR LE BOUTON OK
		if (isset($_POST['btnAdminNames'])) {

			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];

			$isvisible = "visible";
				
			$profil = $manager->findGuestByNames($_POST['firstname'], $_POST['lastname']);
				
			$this->show('admin/profil_invites', ['invites' => $invites, 'profil' => $profil, 'isvisible' => $isvisible]);	


		}

		// AU CLIC SUR LE BOUTON ENREGISTRER MODIFICATIONS
		if (isset($_POST['btnAdminProfile'])) {
			
			$data = [
					'email' => $_POST['email'],
					'password' => $_POST['password'],
					'children' => $_POST['enfants'],
					'diet' => $_POST['regime'],
					'aliments' => $_POST['aliment_specs'],
					'rsvpMa' => $_POST['rsvpMa'],
					'rsvpFr' => $_POST['rsvpFr'],
				];
					
			$result = $manager->update($data, $_POST['id']);

			$message = "Le profil a bien été modifié !";

			$this->show('admin/profil_invites', ['invites' => $invites, 'isvisible' => $isvisible, 'message' => $message]);

		}

		$this->show('admin/profil_invites', ['invites' => $invites, 'isvisible' => $isvisible]);
	}



	public function info_une()
	{	
		$this->show('admin/info_une');
	}
	

}