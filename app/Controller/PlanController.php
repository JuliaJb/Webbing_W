<?php

namespace Controller;

use \W\Controller\Controller;

class PlanController extends Controller
{

	public function plan()
	{
		$manager = new \Manager\UserManager();
		$invites = $manager->findAll($orderBy = "1", $orderDir = "ASC");

		$fichierJson = fopen("assets/json/data.json", "w");
		fwrite($fichierJson, json_encode($invites));
		fclose($fichierJson);


		$this->show('default/plan');
	}




}