<?php

namespace Manager;

class PostManager extends \W\Manager\Manager
{
	public function get_post_by_filter($cat)
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE category = :category";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":category", $cat);
		$sth->execute();

		return $sth->fetch();
	}
}