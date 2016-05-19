<?php
namespace Manager;

class UserManager extends \W\Manager\Manager {

	public function checkInscription($lastname, $firstname)
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE lastname = :lastname AND firstname = :firstname";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":lastname", $lastname);
		$sth->bindValue(":firstname", $firstname);
		$sth->execute();

		return $sth->fetch();
	}

	public function checkConnexion($email, $password)
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE email = :email AND password = :password";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":email", $email);
		$sth->bindValue(":password", $password);
		$sth->execute();

		return $sth->fetch();
	}

	public function yesAnswerMaurice()
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE rsvpMa = :rsvpMa";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":rsvpMa", 1);
		$sth->execute();

		return $sth->fetchAll();
	}

	public function noAnswerMaurice()
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE rsvpMa = :rsvpMa";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":rsvpMa", 0);
		$sth->execute();

		return $sth->fetchAll();
	}

	public function yesAnswerFrance()
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE rsvpFr = :rsvpFr";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":rsvpFr", 1);
		$sth->execute();

		return $sth->fetchAll();
	}

	public function noAnswerFrance()
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE rsvpFr = :rsvpFr";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":rsvpFr", 0);
		$sth->execute();

		return $sth->fetchAll();
	}

	public function findLastByFirst($firstname)
	{

		$sql = "SELECT lastname FROM " . $this->table . " WHERE firstname = :firstname";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":firstname", $firstname);
		$sth->execute();

		return $sth->fetchAll();
	}

	public function findGuestByNames($firstname, $lastname)
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE firstname = :firstname AND lastname = :lastname";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":firstname", $firstname);
		$sth->bindValue(":lastname", $lastname);
		$sth->execute();

		return $sth->fetch();
	}



}
