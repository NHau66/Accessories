<?php
	
    include('Connect.php');
	// session_start();
		
	if(isset($_GET["idHD"]))
	{
		
		$IDHoaDon = $_GET["idHD"];
		
		// $IDTaiKhoan = $_SESSION['IDTaiKhoan'];
		$cmd = "select * from hoadon where IDHoaDon = '".$IDHoaDon."'";
		
		$query = mysqli_query($conn, $cmd);
		$data = mysqli_fetch_assoc($query );
		// $TongTien = number_format($data["TongTien"], $decimals = 0 , $dec_point = "." , $thousands_sep = ".");
		$TongTien = $data["TongTien"];
		$Total = number_format($TongTien,$decimals = 0 , $dec_point = "." , $thousands_sep = ".");
	}
	else if (isset($_GET["stats"]))
		
		{
			$cmd = "SELECT hd.IDKhachHang, hd.IDHoaDon, hd.TongTien, hd.TrangThai, hd.PhuongThucThanhToan, hd.DiaChiNhan, ttkh.HoTen, ttkh.SDT
			from hoadon as hd, thongtinkhachhang as ttkh 
			WHERE hd.IDKhachHang = ttkh.IDKhachHang and hd.TrangThai='".$_GET["stats"]."'";
			
			$query = mysqli_query($conn, $cmd);
		}
	else 
	{
		$cmd = "SELECT hd.IDKhachHang, hd.IDHoaDon, hd.TongTien, hd.TrangThai, hd.PhuongThucThanhToan, hd.DiaChiNhan, ttkh.HoTen, ttkh.SDT
			from hoadon as hd, thongtinkhachhang as ttkh 
			WHERE hd.IDKhachHang = ttkh.IDKhachHang";
		$query = mysqli_query($conn, $cmd);
		
		
		
	}
	
	
	
	
	
		
		
	
	
	
?>