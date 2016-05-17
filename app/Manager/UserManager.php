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




}
