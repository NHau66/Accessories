<?php

    include('Connect.php');
	session_start();
	
	if(isset($_POST['idLoai']))
	{
		
		$idLoai = $_POST['idLoai'];
		$sql = "DELETE FROM loaisp WHERE IDLoai ='".$idLoai."'";
	
		// echo $sql;
		
		$query = mysqli_query($conn,$sql);
		if($query)
		{
			echo "Xóa thành công";
		}
		else
		{
			echo "Xóa thất bại, có lỗi đã xảy ra";
		}
	}
	else
	{
		echo "Xóa thất bại, có lỗi đã xảy ra";
	}

?>