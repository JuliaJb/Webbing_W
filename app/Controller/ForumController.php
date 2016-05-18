<?php

namespace Controller;

use \W\Controller\Controller;

class ForumController extends Controller
{

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
		
			if (empty($errors))
			{
				$data = [
					'titre' => $_POST['inp_title'],
					'message' => $_POST['inp_content'],
					'id_user' => $_SESSION['id'],
				];

				$manager->insert($data, $stripTags = True);

				$this->redirectToRoute('forum');
			}

		}




		$this->show('default/forum_create', ['errors' => $errors]);
	}

}