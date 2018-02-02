<?php
	function Tinmoinhat_Mottin()
	{
		global $dbh;
		$qr = "
			Select * from tin
			order by idTin desc
			limit 0,1
		";
		$sth = $dbh->prepare($qr);
		$sth->execute();
		return $sth->fetchAll();
	}
	
	function Tinmoinhat_Bontin()
	{
		global $dbh;
		$qr = "
			Select * from tin
			order by idTin desc
			limit 1,4
		";
		$sth = $dbh->prepare($qr);
		$sth->execute();
		return $sth->fetchAll();
	}
	
	function TinXemNhieuNhat()
	{
				global $dbh;
		$qr = "
			Select * from tin
			order by SoLanXem desc
			limit 0,6
		";
		$sth = $dbh->prepare($qr);
		$sth->execute();
		return $sth->fetchAll();
	}
?>