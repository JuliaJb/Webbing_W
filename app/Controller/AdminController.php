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
		$this->show('admin/statistiques');
	}

	public function contact_invites()
	{	
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

		// AU CLIC SUR LE BOUTON OK
		if (isset($_POST['btnAdminNames'])) {

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