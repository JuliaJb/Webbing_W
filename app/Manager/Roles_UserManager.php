<?php

namespace Manager;

class Roles_UserManager extends \W\Manager\Manager
{
	public function get_user_roles()
	{

		$sql = "SELECT id_role FROM " . $this->table . " WHERE id_user = :id_user";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id_user", $_SESSION['id']);
		$sth->execute();

		return $sth->fetchAll();
	}

}