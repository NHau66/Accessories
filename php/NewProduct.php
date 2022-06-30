<?php
	include 'connect.php';
	
	$TenSP = $_POST["tenSP"];
	$gia = $_POST["gia"];
	$GiamGia = $_POST["GiamGia"];
	$LoaiSP = $_POST["LoaiSP"];
	$SoLuong = $_POST["SoLuong"];
	$ThongSoKiThuat = $_POST["ThongSoKiThuat"];
	$DacDiemNoiBat = $_POST["DacDiemNoiBat"];
	
	
	
	$cmd = "SELECT IDSanPham FROM sanpham ORDER by IDSanPham DESC LIMIT 1";
	$query = mysqli_query($conn, $cmd);
	$row = mysqli_fetch_assoc($query);
	
	
	
	$IDSanPham = $row["IDSanPham"];
	$SplitID = explode("SP", $IDSanPham);
	If ($SplitID[1] < 9 and $SplitID[1] >0)
	{
		$idSP = "SP00".$SplitID[1]+1;
		$stt = $SplitID[1]+1;
	}
	else
	{
		$idSP = "SP0".$SplitID[1]+1;
		$stt = $SplitID[1]+1;
	}
	
	$_isFirst = true;
	$data_details ="";
	$i = 1;
	foreach($_FILES as $key) {
		if ($key['error'] == 0)
		{
			$errors= array();
			$file_name = $key['name'];
			$file_size = $key['size'];

			$file_tmp = $key['tmp_name'];
			$file_type = $key['type'];
			$file_parts =explode('.',$key['name']);
			$file_ext=strtolower(end($file_parts));
			$expensions= array("jpeg","jpg","png");
			if(in_array($file_ext,$expensions)=== false)
			{
				$errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
			}
			
			if ($_isFirst == true)
			{
				$imgLink = "product-".$stt.".jpg";
				echo $imgLink."\n";
				$target = "../images/".$imgLink;
				$data = "./images/".$imgLink;
				$sql = "INSERT INTO sanpham (IDSanPham, TenSP, IDLoai, DonGia, GiamGia, SoLuong, Img) 
						VALUES ('$idSP','$TenSP','$LoaiSP',$gia, $GiamGia, $SoLuong, '$data')";
				mysqli_query($conn, $sql);
				if (move_uploaded_file($key['tmp_name'], $target)) 
				{
					echo '<script language="javascript">alert("Đã upload thành công!")</script>'."\n";
					
				}
				else
				{
					echo '<script language="javascript">alert("Đã upload thất bại!");</script>'."\n";
				}
				$_isFirst = false;
			}
			
			else if ($_isFirst == false)
			{
				
				$imgLink = "product-".$stt."-detail-".$i.".jpg";
				
				$target = "../images/product-detail/".$imgLink;
				
				$data_details = $data_details . "./images/product-detail/".$imgLink.",";
				
				
				if (move_uploaded_file($key['tmp_name'], $target)) 
				{
					echo '<script language="javascript">alert("Đã upload thành công!")</script>';
				}
				else
				{
					echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
				}
				$i = $i + 1;
			}
		}

	}
	
	$data = $data.",".$data_details;
	$sql = "INSERT INTO chitietsanpham (IDSanPham,ThongSoKiThuat, DacDiemNoiBat, HinhAnh ) 
			VALUES ('$idSP', '$ThongSoKiThuat','$DacDiemNoiBat','$data' )";
			mysqli_query($conn, $sql);
		
	
?>