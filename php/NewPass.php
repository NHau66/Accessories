<?php

//Nhúng file kết nối với database
    include('Connect.php');
	session_start();
	
	$IDTaiKhoan = $_SESSION["IDTaiKhoan"];
	$OldPass = $_POST["OldPass"];
	$NewPass = $_POST["NewPass"];
	$PassAgain = $_POST["PassAgain"];
	
	if (!isset($IDTaiKhoan))
		echo "Need to login";
	elseif ($NewPass != $PassAgain)
		echo "Not match";    //mật khẩu mới và xác nhận mật khẩu không khớp
	elseif ($NewPass == $PassAgain)
	{
		$CheckOldPass = "select * from taikhoan where IDTaiKhoan='".$IDTaiKhoan."' and MatKhau = '".$OldPass."'";
		$query = mysqli_query($conn, $CheckOldPass);
		if(mysqli_num_rows($query) == 0)
			echo "Sai mật khẩu cũ";
		else
		{
			$SetNewPass = "update taikhoan set MatKhau='".$NewPass."' where IDTaiKhoan='".$IDTaiKhoan."'";
			$QuerySet = mysqli_query($conn, $SetNewPass);
			if($QuerySet)
				echo "Thành công";
			else
				echo "Thất bại";
		}
		
	}
	else
	{
		echo $PassAgain;
		
	}
	

?>