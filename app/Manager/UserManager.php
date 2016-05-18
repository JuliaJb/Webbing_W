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




}
