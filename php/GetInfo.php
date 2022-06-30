<?php

//Nhúng file kết nối với database
    include('Connect.php');

	// Tìm kiếm thông tin cá nhân của ng dùng
	$cmd = "SELECT tk.IDTaiKhoan, tk.TaiKhoan, ttkh.HoTen, ttkh.SDT, ttkh.GioiTinh, ttkh.DiaChi, tk.Quyen
			from taikhoan as tk, thongtinkhachhang as ttkh 
			WHERE tk.IDTaiKhoan = (SELECT IDTaiKhoan FROM taikhoan WHERE TaiKhoan = '".$_SESSION['username']."') 
				AND ttkh.IDKhachHang = (SELECT IDTaiKhoan FROM taikhoan WHERE TaiKhoan = '".$_SESSION['username']."')";
	// echo $cmd;
	$query = mysqli_query($conn,$cmd);
			
		  
	
	$row = mysqli_fetch_assoc($query);

	
	$DiaChi = $row["DiaChi"];

	
	
 

?>