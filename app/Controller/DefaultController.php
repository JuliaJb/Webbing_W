<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{


	public function home()
	{
		
		$this->show('default/home');
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