<?php

namespace Controller;

use \W\Controller\Controller;

class PhotoController extends Controller
{



	public function photo()
	{
		
		$maxsize = 1048576;
		$erreurPhoto = [];
		
		if (isset($_POST['poster'])) 
		{

			echo "good";
			if ($_FILES['photo']['error'] > 0)
			{
				echo "Erreur lors du transfert";
			}
			else
			{
				var_dump($_FILES['photo']);
			}

			// type d'erreur
			// UPLOAD_ERR_NO_FILE : fichier manquant.
			// UPLOAD_ERR_INI_SIZE : fichier dépassant la taille maximale autorisée par PHP.
			// UPLOAD_ERR_FORM_SIZE : fichier dépassant la taille maximale autorisée par le formulaire.
			// UPLOAD_ERR_PARTIAL : fichier transféré partiellement.


			// TAILLE DU FICHIER

			if ($_FILES['icone']['size'] > $maxsize) 
			{
				$erreurPhoto['size'] = "Le fichier est trop gros";
			}


			// TYPE DU FICHIER

			$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
			//1. strrchr renvoie l'extension avec le point (« . »).
			//2. substr(chaine,1) ignore le premier caractère de chaine.
			//3. strtolower met l'extension en minuscules.
			$extension_upload = strtolower(  substr(  strrchr($_FILES['icone']['name'], '.')  ,1)  );

			if ( in_array($extension_upload,$extensions_valides) ) 
			{
				echo "Extension correcte";
			}





			$this->show('default/photo');
		}

		$this->show('default/photo');
	}





}