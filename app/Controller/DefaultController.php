<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{


	public function home()
	{
		
		$this->show('default/home');
	}

	public function forum()
	{
		
		echo "C'est la forum";
	}


	public function infos()
	{
		
		echo "C'est la infos";
	}

	public function deconnexion()
	{
		unset($_SESSION['lastname']);
		unset($_SESSION['firstname']);

		$this->redirectToRoute('login');

	}



}