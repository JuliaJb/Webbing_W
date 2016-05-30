<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{


	public function home()
	{
		$manager = new \Manager\UserManager();

		$profil = $manager->findGuestByNames($_SESSION['firstname'], $_SESSION['lastname']);

		$franceKey = array_search('France', $_SESSION['roles']) ;
		$mauriceKey = array_search('Maurice', $_SESSION['roles']) ;
		$bachelorKey = array_search('Bachelor', $_SESSION['roles']) ; 
		$bacheloretteKey = array_search('Bachelorette', $_SESSION['roles'])  ; 
		$maurice = false;
		$france = false;
		$bachelorette = false;
		$bachelor = false;

		if (is_int($bachelorKey)) {
		  $bachelor = true;
		}
		if (is_int($bacheloretteKey)) {
		  $bachelorette = true;
		}
		if (is_int($franceKey)) {
		  $france = true;
		}
		if (is_int($mauriceKey)) {
		  $maurice = true;
		}
		

		if (isset($_POST['valid_home_Ma'])) {
			$data = [
					'rsvpMa' => $_POST['rsvpMa'],
				];
					
			$result = $manager->update($data, $_SESSION['id']);

			$profil = $manager->findGuestByNames($_SESSION['firstname'], $_SESSION['lastname']);

			$this->show('default/home', ['profil' => $profil]);

		}

		if (isset($_POST['valid_home_Fr'])) {
			$data = [
					'rsvpFr' => $_POST['rsvpFr'],
				];
					
			$result = $manager->update($data, $_SESSION['id']);

			$profil = $manager->findGuestByNames($_SESSION['firstname'], $_SESSION['lastname']);

			$this->show('default/home', ['profil' => $profil]);

		}

		$this->show('default/home', [
			'profil' => $profil,
			'maurice' => $maurice,
			'france' => $france,
			'bachelorette' => $bachelorette,
			'bachelor' => $bachelor,
		]);
	}




	public function info_france()
	{
		
		$this->show('default/info_france');
	}

	public function info_maurice()
	{
		
		$this->show('default/info_maurice');
	}

	public function deconnexion()
	{
		unset($_SESSION);

		$this->redirectToRoute('login');

	}

}