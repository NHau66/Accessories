<?php

    include('Connect.php');
	
	$IDTaiKhoan = $_POST['IDTaiKhoan'];
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Phone = $_POST['Phone'];
	$Gender = $_POST['Gender'];
	$City = $_POST['City'];
	$District= $_POST['District'];
	$Ward = $_POST['Ward'];
	$Address = $_POST['Address'];
    
	
	$DiaChi = $City."|".$District."|".$Ward."|".$Address;
	$cmd = "update thongtinkhachhang set SDT = '".$Phone."', GioiTinh = '".$Gender."', DiaChi = '".$DiaChi."', HoTen = '".$Name."'
			where IDKhachHang = '".$IDTaiKhoan."'";

    $query = mysqli_query($conn,$cmd);
    
	if ($query) 
	{
        echo "Lưu thành công";
    }
	
	else
	{
		echo "Lưu thất bại";
		
	}

?>