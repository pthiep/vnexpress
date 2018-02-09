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

	function Tinmoinhat_TheoLoaiTin_Mottin($idLT)
	{
		global $dbh;
		$qr = "
			Select * from tin
			where idLT = $idLT
			order by idTin desc
			limit 0,1
		";
		$sth = $dbh->prepare($qr);
		$sth->execute();
		return $sth->fetchAll();
	}

	function Tinmoinhat_TheoLoaiTin_Bontin($idLT)
	{
		global $dbh;
		$qr = "
			Select * from tin
			where idLT = $idLT
			order by idTin desc
			limit 1,6
		";
		$sth = $dbh->prepare($qr);
		$sth->execute();
		return $sth->fetchAll();
	}

	function TenLoaiTin($idLT)
	{
		global $dbh;
		$qr = "
			Select Ten from loaitin
			where idLT = $idLT
		";
		$sth = $dbh->prepare($qr);
		$sth->execute();
		return $sth->fetchAll()[0]['Ten'];
	}

	function QuangCao($vitri)
	{
		global $dbh;
		$qr = "
			Select * from quangcao
			where vitri = $vitri
		";
		$sth = $dbh->prepare($qr);
		$sth->execute();
		return $sth->fetchAll();
	}

	function DanhSachTheLoai()
	{
		global $dbh;
		$qr = "
			Select * from theloai
		";
		$sth = $dbh->prepare($qr);
		$sth->execute();
		return $sth->fetchAll();
	}

	function DanhSachLoaiTin_Theo_TheLoai($idTL)
	{
		global $dbh;
		$qr = "
			Select * from loaitin
			where idTL = $idTL
		";
		$sth = $dbh->prepare($qr);
		$sth->execute();
		return $sth->fetchAll();
	}

	function TinMoi_BenTrai($idTL)
	{
		global $dbh;
		$qr = "
			Select * from tin
			where idTL = $idTL
			order by idTin desc
			limit 0,1
		";
		$sth = $dbh->prepare($qr);
		$sth->execute();
		return $sth->fetchAll();
	}

	function TinMoi_BenPhai($idTL)
	{
		global $dbh;
		$qr = "
			Select * from tin
			where idTL = $idTL
			order by idTin desc
			limit 1,2
		";
		$sth = $dbh->prepare($qr);
		$sth->execute();
		return $sth->fetchAll();
	}
?>
