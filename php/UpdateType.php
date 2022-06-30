<?php

    include('Connect.php');
	session_start();
	
	if(isset($_POST['idLoai']) or  isset($_POST['dataUpdate']))
	{
		
		$idLoai = $_POST['idLoai'];
		$data =  $_POST['dataUpdate'];
		$sql = " UPDATE loaisp SET TenLoai = '".$data.
			"' WHERE IDLoai = '".$idLoai."'";
	
		// echo $sql;
		
		$query = mysqli_query($conn,$sql);
		if($query)
		{
			echo "Cập nhật thành công";
		}
		else
		{
			echo "Cập nhật thất bại";
		}
	}
	else
	{
		echo "Vui lòng nhập dữ liệu";
	}

?>