<?php

//Nhúng file kết nối với database
    include('Connect.php');

	if (isset($_GET["roles"]))
		
		{
			$cmd = "SELECT tk.IDTaiKhoan, tk.TaiKhoan, ttkh.HoTen, ttkh.SDT, ttkh.GioiTinh, ttkh.DiaChi, tk.Quyen
					from taikhoan as tk, thongtinkhachhang as ttkh 
					WHERE tk.IDTaiKhoan = ttkh.IDKhachHang and tk.Quyen = ".$_GET["roles"];
			
			$query = mysqli_query($conn, $cmd);
		}
		
	else
	{
		// Tìm kiếm thông tin cá nhân của ng dùng
		$cmd = "SELECT tk.IDTaiKhoan, tk.TaiKhoan, ttkh.HoTen, ttkh.SDT, ttkh.GioiTinh, ttkh.DiaChi, tk.Quyen
				from taikhoan as tk, thongtinkhachhang as ttkh 
				WHERE tk.IDTaiKhoan = ttkh.IDKhachHang";
		// echo $cmd;
		$query = mysqli_query($conn,$cmd);
	}
			
 

?>