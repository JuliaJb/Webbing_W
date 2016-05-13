<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	public function login()
	{
		
		$this->show('default/login');

	}

	public function profil()
	{
		
		$this->show('default/profil');
	}

	public function home()
	{
		
		$this->show('default/home');
	}

	public function forum()
	{
		
		echo "C'est la forum";
	}

	public function photo()
	{
		
		echo "C'est la photo";
	}

	public function infos()
	{
		
		echo "C'est la infos";
	}

	public function deconnexion()
	{
		
		echo "C'est la deconnexion";
	}



}