<?php

namespace Controller;

use \W\Controller\Controller;

class ForumController extends Controller
{

	//Get the users role:
	public function get_user_role()
	{
		
		$roles_manager = new \Manager\Roles_UserManager();

		$result_r = $roles_manager->get_user_roles();

		$roles = array();
		foreach ($result_r as $key => $value) 
		{
			switch ($value['id_role']) 
			{
			 	case 1:
			 		$roles[] = "Admin";
			 		break;
			 	case 2:
			 		$roles[] = "France";
			 		break;
		 		case 3:
			 		$roles[] = "Maurice";
			 		break;
			 	case 4:
			 		$roles[] = "Bachelor";
			 		break;
			 	case 5:
			 		$roles[] = "Bachelorette";
			 		break;
			 	case 6:
			 		$roles[] = "Futur";
			 		break;
			 	default:
			 		$roles[] = "None";
			 		break;
			}
		}

		$_SESSION['roles'] = $roles;

		//$this->show('default/test', ['roles' => $roles]);

	}


	
	//List all Forum Topics 
	public function post_list()
	{

		$this->get_user_role(); 

		$manager = new \Manager\PostManager();

		$result = $manager->findAll();

		$this->show('forum/forum_list', ['result' => $result]);

	}

	//Detail d'un Sujet
	public function post_detail($id)
	{
		$manager = new \Manager\PostManager();

		$post = $manager->find($id);


		//Afficher toutes les réponses : 
		$rs_manager = new \Manager\ReponseManager();

		$reponses = $rs_manager->get_post_reply($id);


		//INSERT Réponse à un sujet:
		$r_errors = array();

		if (isset($_POST['btn_f_reply']))
		{
			if(empty($_POST['inp_content']))
			{
				$r_errors['content'] = "Vous avez oublié votre réponse.";
			}
			else
			{

				$data = [
					'id_user' => $_SESSION['id'],
					'date_pub' => date('Y-m-d'),
					'id_post' => $id,
					'message' => $_POST['inp_content'],
				];

				$insert = $rs_manager->insert($data);

				$this->redirectToRoute('forum_detail', ['id'=> $id]);
			}		
		}

		$this->show('forum/forum_detail', ['post' => $post, 'reponses' => $reponses, 
			'r_errors'=> $r_errors]);

	}


	//Filtrer List par catégorie
	public function post_filter($cat)
	{
		$manager = new \Manager\PostManager();

		$filtered = $manager->get_post_by_filter($cat);

		$this->show('forum/forum_list', ['filtered' => $filtered]);
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

		$this->show('forum/forum_create', ['errors' => $errors]);
	}


	//Répondre un sujet

	public function post_reply() 
	{
		return "ok";
	}


}