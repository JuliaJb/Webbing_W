<?php
namespace Manager;

class MiniurlManager extends \W\Manager\Manager {

	public function checkLongUrl($url_longue)
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE long_url = :long_url";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":long_url", $url_longue);
		$sth->execute();

		return $sth->fetch();
	}

	public function checkCourtURL($url_courte)
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE id_url = :id_url";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id_url", $url_courte);
		$sth->execute();

		return $sth->fetch();
	}

	public function findUrlByIdUrl($url)
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE id_url = :id_url";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id_url", "http://murl.ly/".$url);
		$sth->execute();

		return $sth->fetch();
	}

}
