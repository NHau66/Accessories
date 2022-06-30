<?php

    include('Connect.php');
	
	
	if(isset($_POST["idTK"]) or isset($_POST["role"]))
	{
		$idTK = $_POST["idTK"];
		$role = $_POST["role"];
		$cmd = "update taikhoan set Quyen = '".$role."' where IDTaiKhoan = '".$idTK."'";
		
		$query = mysqli_query($conn,$cmd);
		
		if ($query) 
		{
			echo "Cập nhật thành công";
		}
		
		else
		{
			echo "Cập nhật thất bại";
			
		}
	}
	else
		echo "Cập nhật thất bại";
?>