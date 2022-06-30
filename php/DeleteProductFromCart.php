<?php

    include('Connect.php');

    $IDSanPham = $_POST['IDSanPham'];
	$IDTaiKhoan = $_POST['IDTaiKhoan'];
	
	$DelFromCart = "delete from giohang where IDSanPham = '".$IDSanPham."' and IDKhachHang = '".$IDTaiKhoan."'";
	$queryDelFromCart = mysqli_query($conn, $DelFromCart);
		
	$CMDBillDetail = "select * from hoadon where IDKhachHang='".$IDTaiKhoan."' and TrangThai = 'not yet'";
	$QueryBillDetail = mysqli_query($conn, $CMDBillDetail );
	if (mysqli_num_rows($QueryBillDetail) > 0)
	{
		$data= mysqli_fetch_assoc($QueryBillDetail);
		$idHD = $data["IDHoaDon"];
		
		$CMDMinus = "select * from chitiethoadon where IDHoaDon = '".$idHD."' and IDSanPham='".$IDSanPham."'";
		$QueryMinus = mysqli_fetch_assoc(mysqli_query($conn, $CMDMinus));
		$Total = $data["TongTien"] - $QueryMinus["GiaTien"]*$QueryMinus["SoLuong"];
		
		$CMDUpdateTotal = "update hoadon set TongTien=".$Total." where IDHoaDon='".$idHD."' and IDKhachHang='".$IDTaiKhoan."'";
		$QueryUpdateTotal = mysqli_query($conn, $CMDUpdateTotal);
		
		$DelFromBill = "delete from chitiethoadon where IDSanPham = '".$IDSanPham."' and IDHoaDon = '".$idHD."'";
		$queryDelFromCart = mysqli_query($conn, $DelFromBill);
		
	
	}
	
	
	
	

?>