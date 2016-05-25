<?php

namespace Manager;

class PostManager extends \W\Manager\Manager
{
	public function get_post_by_filter($cat)
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE category like :category";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":category", $cat);
		$sth->execute();

		return $sth->fetchAll();
	}

	public function get_post_and_author($id)
	{
		$sql = "SELECT U.firstname, U.lastname, P.* FROM users AS u, posts AS P WHERE P.id_user = 2 AND P.id_user = U.id";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id);
		$sth->execute();

		return $sth->fetchAll();

	}
}