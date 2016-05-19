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
		$manager = new \Manager\UserManager();
		$nbInvites = $manager->guestCount();
		$yesGuestCountMaurice = $manager->yesGuestCountMaurice();
		$noGuestCountMaurice = $manager->noGuestCountMaurice();
		$yesGuestCountFrance = $manager->yesGuestCountFrance();
		$noGuestCountFrance = $manager->noGuestCountFrance();

		
		
		$this->show('admin/statistiques', [
				'nbInvites' => $nbInvites,
				'yesGuestCountMaurice' => $yesGuestCountMaurice,
				'noGuestCountMaurice' => $noGuestCountMaurice,
				'yesGuestCountFrance' => $yesGuestCountFrance,
				'noGuestCountFrance' => $noGuestCountFrance
			]);
	}

	public function contact_invites()
	{	

		// function envoi_email($subject, $body, $groupeMa, $groupeFr)
		// {
		// 	$usersFr = get_emails_france();
		// 	$usersMa = get_emails_maurice();

		// 	// var_dump($usersMa);
		// 	// echo "<br>";
		// 	// var_dump($usersFr);

		// 	require_once 'vendor/autoload.php';

		// 	$mail = new PHPMailer;

		// 	$mail->isSMTP();  // Set mailer to use SMTP

		// 	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		// 	$mail->SMTPAuth = true;                               // Enable SMTP authentication
		// 	$mail->Username = 'wf3fev2016@gmail.com';                 // SMTP username
		// 	$mail->Password = 'webforce3';                           // SMTP password
		// 	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		// 	$mail->Port = 587;                                    // TCP port to connect to

		// 	$mail->setFrom('wf3fev2016@gmail.com', 'Julia');


		// 	if (isset($_POST['groupeFr'])) {
		// 		for ($i=0; $i < count($usersFr) ; $i++) { 
		// 			$mail->addAddress($usersFr[$i]['mail'], 'test');
		// 		}
		// 	}

		// 	if (isset($_POST['groupeMa'])) {
		// 		for ($i=0; $i < count($usersMa) ; $i++) { 
		// 			$mail->addAddress($usersMa[$i]['mail'], 'test');
		// 		}
		// 	}

		// 	// $mail->addReplyTo('info@example.com', 'Information');
		// 	// $mail->addCC('cc@example.com');
		// 	// $mail->addBCC('bcc@example.com');

		// 	// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		// 	// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		// 	$mail->isHTML(true);                                  // Set email format to HTML

		// 	$mail->Subject = $subject;

		// 	$mail->Body    = $body;

		// 	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		// 	if(!$mail->send()) {
		// 	    $message = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
		// 	} else {
		// 	    $message = 'Votre email a bien été envoyé. Vous pouvez en renvoyer un si vous le souhaitez';
		// 	}

		// 	return $message;
		// }



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

		$isvisible = "novisible";
		$firstname = "";
		$lastname = "";

		// AU CLIC SUR LE BOUTON OK
		if (isset($_POST['btnAdminNames'])) {

			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];

			$isvisible = "visible";
				
			$profil = $manager->findGuestByNames($_POST['firstname'], $_POST['lastname']);
				
			$this->show('admin/profil_invites', ['invites' => $invites, 'profil' => $profil, 'isvisible' => $isvisible]);	


		}

		// AU CLIC SUR LE BOUTON ENREGISTRER MODIFICATIONS
		if (isset($_POST['btnAdminProfile'])) {
			
			$data = [
					'email' => $_POST['email'],
					'password' => $_POST['password'],
					'children' => $_POST['enfants'],
					'diet' => $_POST['regime'],
					'aliments' => $_POST['aliment_specs'],
					'rsvpMa' => $_POST['rsvpMa'],
					'rsvpFr' => $_POST['rsvpFr'],
				];
					
			$result = $manager->update($data, $_POST['id']);

			$message = "Le profil a bien été modifié !";

			$this->show('admin/profil_invites', ['invites' => $invites, 'isvisible' => $isvisible, 'message' => $message]);

		}

		$this->show('admin/profil_invites', ['invites' => $invites, 'isvisible' => $isvisible]);
	}



	public function info_une()
	{	
		$this->show('admin/info_une');
	}
	

}