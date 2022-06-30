<?php
	
    include('Connect.php');

	session_start();
	if (!isset($_SESSION['username']) )
	{
		echo "Need to login";
		
	}
	
	else
	{
		$IDTaiKhoan = $_SESSION['IDTaiKhoan'];
		$SoLuong = $_POST['SoLuong'];
		$IDSanPham = $_POST['IDSanPham'];
		$cmd1 = "SELECT * FROM giohang where IDSanPham = '".$IDSanPham."' and IDKhachHang='".$IDTaiKhoan."'";
		$query1 = mysqli_query($conn,$cmd1);
		if (mysqli_fetch_assoc($query1) != null)
		{
			$CmdUpdate = "update giohang set SoLuong = 
								(SELECT SoLuong FROM giohang where IDSanPham = '".$IDSanPham."' and IDKhachHang='".$IDTaiKhoan."')+".$SoLuong."	
								where IDSanPham = '".$IDSanPham."' and IDKhachHang='".$IDTaiKhoan."'"; 
			
			$update_cart = mysqli_query($conn,$CmdUpdate);
			if ($update_cart)
				echo "Thêm thành công";
			else
				echo "Thêm thất bại";
			
		}
		else
		{
		
			$maxstt = mysqli_query($conn,"SELECT IDGioHang FROM giohang ORDER by IDGioHang DESC LIMIT 1");
			$row = mysqli_fetch_assoc($maxstt);
			
			
			if ($row==null)
			{
				$idGH = 'GH001';
			}
			else
			{
				$IDGioHang = $row["IDGioHang"];
				$SplitID = explode("GH", $IDGioHang);
				If ($SplitID[1] < 9 and $SplitID[1] >0)
					$idGH = "GH00".$SplitID[1]+1;
				else
					$idGH = "GH0".$SplitID[1]+1;
				
			}
			
			
			
			$CmdInsert = "insert into giohang (IDGioHang, IDSanPham, IDKhachHang, SoLuong)
					VALUES ('".$idGH."', '".$IDSanPham."', '".$IDTaiKhoan."', ".$SoLuong.");";
					


			$QueryInsert = mysqli_query($conn,$CmdInsert);
			
			if ($QueryInsert) 
			{
				echo "Đã thêm vào giỏ hàng";
			}
			
			else
			{
				echo "Thêm thất bại";
				
			}
		}
	}
?>