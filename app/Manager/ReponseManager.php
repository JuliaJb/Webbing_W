<?php

namespace Manager;

class ReponseManager extends \W\Manager\Manager
{
	public function get_post_reply($id_post)
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE id_post = :id_post";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id_post", $id_post);
		$sth->execute();

		return $sth->fetchAll();
	}


}