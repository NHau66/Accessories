<?php

//Nhúng file kết nối với database
    include('Connect.php');
	session_start();
	$IDHoaDon = $_POST["IDHoaDon"];
	$DiaChiNhan = $_POST["DiaChiNhan"];
	$PhuongThucThanhToan = $_POST["PhuongThucThanhToan"];
	$YeuCauKhac = $_POST["YeuCauKhac"];
	// cập nhật trạng thái của hóa đơn
	$cmd = "update hoadon set TrangThai = 'Paid', DiaChiNhan='".$DiaChiNhan."', PhuongThucThanhToan='".$PhuongThucThanhToan ."', YeuCauKhac='".$YeuCauKhac."' 
			where IDHoaDon='".$IDHoaDon."'";
	
	$query = mysqli_query($conn,$cmd);
			
	If ($query)
	{
		$cmdDel = "delete from giohang where IDKhachHang='".$_SESSION['IDTaiKhoan']."'";
		$Del = mysqli_query($conn,$cmdDel);
		if ($Del)
			echo "Thanh toán thành công!!!";
		else
			echo "Có lỗi đã xảy ra!!! Vui lòng thử lại sau";
		
	}
	else 
		echo "Có lỗi đã xảy ra!!! Vui lòng thử lại sau";

	
	
 

?>