<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{


	public function admin()
	{	


		$manager = new \Manager\UserManager();

		// STATISTIQUES
		$nbInvites = $manager->guestCount();
		$yesGuestCountMaurice = $manager->yesGuestCountMaurice();
		$noGuestCountMaurice = $manager->noGuestCountMaurice();
		$yesGuestCountFrance = $manager->yesGuestCountFrance();
		$noGuestCountFrance = $manager->noGuestCountFrance();
		// LISTE INVITE
		$invites = $manager->findAll($orderBy = "1", $orderDir = "ASC");
		// LISTE MAURICE
		$invitesOuiMa = $manager->yesAnswerMaurice();
		$invitesNonMa = $manager->noAnswerMaurice();
		// LISTE FRANCE
		$invitesOuiFr = $manager->yesAnswerFrance();
		$invitesNonFr = $manager->noAnswerFrance();
		// CONTACT INVITE
		$emailMaurice = $manager->get_emails_maurice();
		$emailFrance = $manager->get_emails_france();

		$isvisible = "novisible";

		
		$this->show('admin/admin', [
				'nbInvites' => $nbInvites,
				'yesGuestCountMaurice' => $yesGuestCountMaurice,
				'noGuestCountMaurice' => $noGuestCountMaurice,
				'yesGuestCountFrance' => $yesGuestCountFrance,
				'noGuestCountFrance' => $noGuestCountFrance,
				'invites' => $invites,
				'invitesOuiMa' => $invitesOuiMa,
				'invitesNonMa' => $invitesNonMa,
				'invitesOuiFr' => $invitesOuiFr,
				'invitesNonFr' => $invitesNonFr,
				'isvisible' => $isvisible,
			]);




		// ******** CONTACT INVITE **********


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

				$this->show('admin/admin', ['message' => $message]);
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

				$this->show('admin/admin', ['message' => $message]);		
			}	
				

			$this->show('admin/admin', ['message' => $message]);

		}

		// ******** FIN CONTACT INVITE **********

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

	

}