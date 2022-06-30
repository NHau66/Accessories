<?php
	
    include('Connect.php');
	
	
	if (isset($_GET["idHD"]))
	{
		$IDHoaDon = $_GET["idHD"];
		$cmd = "select * from chitiethoadon where IDHoaDon= '".$IDHoaDon."'";
		$query = mysqli_query($conn, $cmd);
	}
	else if (isset($_POST["idHD"]))
	{
		$IDHoaDon = $_POST["idHD"];
		$cmd = "SELECT HD.IDHoaDon, HD.IDKhachHang, HD.TongTien, CT.GiaTien, CT.SoLuong, SP.IDSanPham, SP.TenSP
				from hoadon as HD, chitiethoadon as CT, sanpham as SP
				WHERE CT.IDHoaDon = HD.IDHoaDon and CT.IDHoaDon = '".$IDHoaDon."' and CT.IDSanPham = SP.IDSanPham";
		$query = mysqli_query($conn, $cmd);
		
		$AllInfo = "";
		while($row = mysqli_fetch_assoc($query))
		{
			$IDHD = $row["IDHoaDon"];
			$IDKhachHang = $row["IDKhachHang"];
			// $TongTien = $row["TongTien"];
			$TongTienHD = number_format($row["TongTien"], $decimals = 0 , $dec_point = "." , $thousands_sep = ".");
			// $GiaTien = $row["GiaTien"];
			$GiaTien = number_format($row["GiaTien"], $decimals = 0 , $dec_point = "." , $thousands_sep = ".");
			$SoLuong = $row["SoLuong"];
			$TongTienSP = number_format($row["GiaTien"] * $SoLuong, $decimals = 0 , $dec_point = "." , $thousands_sep = ".");
			$IDSanPham = $row["IDSanPham"];
			$TenSP = $row["TenSP"];
			// $Info= [$IDHD,$IDKhachHang,$TongTien,$GiaTien, $SoLuong, $IDSanPham, $TenSP];
			
			$AllInfo = $AllInfo.$IDHD.",".$IDKhachHang.",".$TongTienHD.",".$GiaTien.",".$TongTienSP.",".$SoLuong.",".$IDSanPham.",".$TenSP."||";
			
			
		}
					echo $AllInfo;

	}

?>