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

		


		if (isset($_POST['btnAdminProfile'])) {

			if (isset($_POST['firstname'])) {
				$lastname = $manager->findLastByFirst($_POST['firstname']);
				var_dump($lastname);


				$profil = $manager->findGuestByNames($_POST['firstname'], $_POST['lastname']);
				var_dump($profil);

				$this->show('admin/profil_invites', ['invites' => $invites, 'lastname' => $lastname, 'profil' => $profil]);
			}
			
			
		}




		$this->show('admin/profil_invites', ['invites' => $invites]);
	}

	public function info_une()
	{	
		$this->show('admin/info_une');
	}
	

}