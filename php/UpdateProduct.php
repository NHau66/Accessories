<?php

    include('Connect.php');
	
	$IDSanPham = $_POST["IDSanPham"];
	$TenSP = $_POST["tenSP"];
	$gia = $_POST["gia"];
	$GiamGia = $_POST["GiamGia"];
	$LoaiSP = $_POST["LoaiSP"];
	$SoLuong = $_POST["SoLuong"];
	$ThongSoKiThuat = $_POST["ThongSoKiThuat"];
	$DacDiemNoiBat = $_POST["DacDiemNoiBat"];
	$ViTri = explode(",",$_POST["ViTri"]);
	
	
	
	
    $CMD_GetImgDetails = "select HinhAnh from chitietsanpham where IDSanPham = '".$IDSanPham."'";
	$query_ImgDetails = mysqli_query($conn, $CMD_GetImgDetails);
	$Link_HinhAnh = mysqli_fetch_assoc($query_ImgDetails)["HinhAnh"];
	$splitLink = explode(",", $Link_HinhAnh);

	$i = 0;
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
			
			else
			{
				$target = "." . $splitLink[$ViTri[$i]];
					
				if (move_uploaded_file($key['tmp_name'], $target)) 
				{
					$_isUploaded = true;				
				}
				else
				{
					$_isUploaded = false;
				}
					
				if ($ViTri[$i] == 0)
				{
					$target = "." . $splitLink[$ViTri[$i]];
					if (move_uploaded_file($key['tmp_name'], $target)) 
					{
						$_isUploaded = true;
					}
					else
					{
						$_isUploaded = false;
					}
				}
				
				
			}
			
			$i = $i + 1;
			
		}

	}
	
	
	$col_sanpham = [];
	$val_sanpham = [];
	
	if ($TenSP != "no")
	{
		array_push($col_sanpham,"TenSP");	
		array_push($val_sanpham,$TenSP);	
	}
	if ($gia != "no")
	{
		array_push($col_sanpham,"DonGia");	
		array_push($val_sanpham,$gia);	
	}
	if ($GiamGia != "no")
	{
		array_push($col_sanpham,"GiamGia");	
		array_push($val_sanpham,$GiamGia);	
	}
	if ($LoaiSP != "no")
	{
		array_push($col_sanpham,"IDLoai");
		array_push($val_sanpham,$LoaiSP);
	}
	if ($SoLuong != "no")
	{
		array_push($col_sanpham,"SoLuong");
		array_push($val_sanpham,$SoLuong);
	}
	
	$setData = "";
	$val = "";
	for($d = 0; $d < count($col_sanpham); $d++)
	{
		if ($d< count($col_sanpham) -1)
		{
			$setData = $setData . $col_sanpham[$d]."='".$val_sanpham[$d] . "',";
			// $val = $val . $val_sanpham[$d] . ",";
		}
		else if ($d == count($col_sanpham) - 1)
		{
			$setData = $setData . $col_sanpham[$d]."='".$val_sanpham[$d]."'";
			// $val = $val . $val_sanpham[$d];
		}
		
	}
	
	
	$cmd_update_sp = "update sanpham set ".$setData." where IDSanPham='".$IDSanPham."'";
	$query_update_sp = mysqli_query($conn, $cmd_update_sp);
	
	$cmd_update_ctsp = "update chitietsanpham 
						set ThongSoKiThuat='".$ThongSoKiThuat."', DacDiemNoiBat = '".$DacDiemNoiBat."'".
						" where IDSanPham='".$IDSanPham."'";
						
	
	$query_update_ctsp = mysqli_query($conn, $cmd_update_ctsp);
	
	if ($query_update_sp and $query_update_ctsp and $_isUploaded = true)
		echo "Cập nhật thành công!!";
	else
		echo "Có lỗi xảy ra!!";
?>