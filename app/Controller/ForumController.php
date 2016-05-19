<?php

namespace Controller;

use \W\Controller\Controller;

class ForumController extends Controller
{

	
	//List all Forum Topics 
	public function post_list()
	{

		$manager = new \Manager\PostManager();

		$result = $manager->findAll();

		$this->show('default/forum_list', ['result' => $result]);

	}

	//Detail d'un Sujet
	public function post_detail($id)
	{
		$manager = new \Manager\PostManager();

		$result = $manager->find($id);

		$this->show('default/forum_detail', ['result' => $result]);

	}


	//Filtrer List par catégorie
	public function post_filter($cat)
	{
		$manager = new \Manager\PostManager();

		$filtered = $manager->get_post_by_filter($cat);

		$this->show('default/forum_list', ['filtered' => $filtered]);
	}

	//Create a New Topic 
	public function post_create()
	{

		$errors = array();

		$manager = new \Manager\PostManager();

		if (isset($_POST['btn_f_create']))
		{
			if (empty($_POST['inp_title']))
			{
				$errors['title'] = "Vous avez oublié d'inclure le titre";
			}

			if(empty($_POST['inp_content']))
			{
				$errors['content'] = "Vous avez oublié d'inclure le contenu";
			}

			if(!isset($_POST['inp_category']))
			{
				$erros['category'] = "Vous devez indiquer une catégorie.";
			}	
		
			if (empty($errors))
			{
				$data = [
					'titre' => $_POST['inp_title'],
					'message' => $_POST['inp_content'],
					'id_user' => $_SESSION['id'],
					'date_publication' => date('Y-m-d'),
					'category' => $_POST['inp_category'],
				];

				$manager->insert($data, $stripTags = True);

				$this->redirectToRoute('forum');
			}

		}

		$this->show('default/forum_create', ['errors' => $errors]);
	}


}