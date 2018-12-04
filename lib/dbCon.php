<?php
mysql_connect("localhost","root","");
mysql_selectdb("vnexpress");
mysql_query("SET NAMES 'UTF8'");
?>
<?php
	function TinMoiNhat_MotTin()
	{

		$qr = "
			SELECT * FROM tin ORDER BY idTin DESC LIMIT 0,1
		";
		return mysql_query($qr);
	}

		function TinMoiNhat_SauTin()
	{

		$qr = "
			SELECT * FROM tin ORDER BY idTin DESC LIMIT 1,7
		";
		return mysql_query($qr);
	}

		function TheLoaiTin($idLT)
		{
			$qr = " 
				SELECT * From tin where idLT = $idLT order by  idTin desc
			";
			return mysql_query($qr);
		}

	function TinXemNhieuNhat()
	{
		$qr =  "
		SELECT * FROM tin ORDER BY SoLanXem DESC LIMIT 0,5
		";
		return mysql_query($qr);
	}
	function LayTenLoaiTin($idLT)
	{
		$qr="
			SELECT DISTINCT *
			FROM loaitin,tin 
			WHERE $idLT=loaitin.idLT and $idLT=tin.idLT
		";
		return mysql_query($qr);
	}

	function TinMoiNhat_TheoLoaiTin_MotTin($idLT)
	{

		$qr = "
			SELECT * FROM tin WHERE idLT = $idLT ORDER BY idTin DESC LIMIT 0,1
		";
		return mysql_query($qr);
	}


	function TinMoiNhat_TheoLoaiTin_BonTin($idLT)
	{

		$qr = "
			SELECT * FROM tin WHERE idTin = $idLT ORDER BY idTin  DESC LIMIT 1,4
		";
		return mysql_query($qr);
	}	


	function QuangCao($vitri)
	{
		$qr = " SELECT * FROM quangcao WHERE vitri = $vitri
		";
		return mysql_query($qr);
	}

	function TenLoaiTin($idLT)
	{	 
		$qr ="
		SELECT TEN from loaitin where idLT = $idTin";
		$loaitin = mysql_query($qr);
		$row = mysql_fetch_array($loaitin);
		return $row['Ten'];

	}

	function DanhSachTheLoai()
	{
		$qr = " SELECT * FROM theloai Limit 0,6"; 
		return mysql_query($qr);
	}

	function DanhSachTheLoaiMenu()
	{
		$qr = " SELECT * FROM theloai"; 
		return mysql_query($qr);
	}

	function DanhSachLoaiTin_Theo_TheLoai($idTL)
	{
		$qr="
			SELECT * FROM loaitin where idTL = $idTL
		";
		return mysql_query($qr);
	}

	function TinMoi_BenTrai($idTL)
	{
		$qr ="
			SELECT * FROM tin
			WHERE idTL = $idTL
			ORDER BY idTin DESC LIMIT 0,1
		";
		return mysql_query($qr);  
	}

		function TinMoi_BenPhai($idTL)
	{

		$qr ="
			SELECT * FROM tin WHERE idTL = $idTL ODDER BY idTin DESC LIMIT 1,2
		";
		return mysql_query($qr);  
	}

	function ChiTietTin($idTin)
	{
		$qr = "
		SELECT * from tin where idTin = $idTin
		";
		return mysql_query($qr);
	}

	function TinTheoLoaiTin($idTL) // the loai tren menu
	{
		$qr = "
		SELECT * FROM `tin` WHERE idTL = $idTL order by idTin desc limit 0,6
		";
		return mysql_query($qr);
	}

	function HienTieuDeLoaiTinDangXem($idLT){
		$qr = "
		 SELECT TenTL, Ten from theloai, loaitin where theloai.idTL = loaitin.idTL 
		 and  idLT = $idLT
		";
		return mysql_query($qr);
	}
?>


