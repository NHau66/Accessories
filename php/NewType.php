<?php

    include('Connect.php');
	session_start();
	
	if(isset($_POST['tenLoai']))
	{
		$tenLoai = $_POST['tenLoai'];
		
		$maxstt = mysqli_query($conn,"SELECT IDLoai FROM loaisp ORDER by IDLoai DESC LIMIT 1");
		$row = mysqli_fetch_assoc($maxstt);
		
		if ($row ==null)
		{
			$idLoai = 'L001';
		}
		else
		{
			$idLoai = $row["IDLoai"];
			
			$SplitID = explode("L", $idLoai);
			If ($SplitID[1] < 9 and $SplitID[1] >0)
				$idLoai = "L00".$SplitID[1]+1;
			else
				$idLoai = "L0".$SplitID[1]+1;
			
		}
		
		$sql = "INSERT INTO loaisp (IDLoai, TenLoai)
			VALUES ('".$idLoai."', '". $tenLoai."')";
	
		// echo $sql;
		
		$query = mysqli_query($conn,$sql);
		if($query)
		{
			echo "Thêm thành công";
		}
		else
		{
			echo "Thêm thất bại, có lỗi đã xảy ra";
		}
	}
	else
	{
		echo "Thêm thất bại, có lỗi đã xảy ra";
	}

?>