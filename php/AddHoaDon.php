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
		$CheckTaiKhoan = "select * from hoadon where IDKhachHang='".$IDTaiKhoan."' and TrangThai = 'pending' ORDER BY STT DESC LIMIT 1";
		$CheckQuery = mysqli_query($conn, $CheckTaiKhoan);
		if(mysqli_num_rows($CheckQuery) > 0)
		{
			
			$data= mysqli_fetch_assoc($CheckQuery);
			$idHD = $data["IDHoaDon"];
		
			
			$GetProductFromCart = "select * from giohang where IDKhachHang = '".$IDTaiKhoan."'";
			
			$QueryProductFromCart = mysqli_query($conn, $GetProductFromCart);
			
			$TongTien = 0;
			while($row = mysqli_fetch_assoc($QueryProductFromCart))
			{
				
				$IDSanPham = $row["IDSanPham"];
				$SoLuong = $row["SoLuong"];
				
				//query để tính giá tiền
				$GetProductDetail = "select * from sanpham where IDSanPham='".$IDSanPham ."'";  
				$QueryProductDetail = mysqli_fetch_assoc(mysqli_query($conn, $GetProductDetail));
				$GiaTien = $QueryProductDetail["DonGia"] *(1-$QueryProductDetail["GiamGia"]/100);
				
				// tính tổng giá tiền trong hóa đơn
				$TongTien = $TongTien + $GiaTien * $SoLuong;
				
				$CMD = "select * from chitiethoadon where IDSanPham='".$IDSanPham."' and IDHoaDon='".$idHD."'";
				$QueryCMD = mysqli_query($conn, $CMD);
				if (mysqli_num_rows($QueryCMD) > 0)
				{
					
					
					$UpdateBillDetails = "update chitiethoadon set GiaTien = ".$GiaTien.", SoLuong = ".$SoLuong."
										where IDHoaDon = '".$idHD."' and IDSanPham= '".$IDSanPham."'";
										
					$QueryUpdateBillDetails = mysqli_query($conn, $UpdateBillDetails);
				}
				else
				{
					
					
					$InsertBillDetails = "insert into chitiethoadon (IDHoaDon, IDSanPham,GiaTien, SoLuong)
											values('".$idHD."','".$IDSanPham ."','".$GiaTien ."','".$SoLuong."')";
					$QueryInsertBillDetails = mysqli_query($conn, $InsertBillDetails);
										
				}
			}
			$CMDTotal = "update hoadon set TongTien = ".$TongTien." where IDHoaDon = '".$idHD."'";
			$QueryTotal = mysqli_query($conn, $CMDTotal);
			echo $idHD;
		}
		else
		{
			
			$maxstt = mysqli_query($conn,"SELECT IDHoaDon FROM hoadon ORDER BY IDHoaDon DESC LIMIT 1");
			$row = mysqli_fetch_assoc($maxstt);
			
			if ($row==null)
			{
				$idHD = 'HD001';
			}
			else
			{
				$IDHoaDon = $row["IDHoaDon"];
				$SplitID = explode("HD", $IDHoaDon);
				If ($SplitID[1] < 9 and $SplitID[1] >0)
					$idHD = "HD00".$SplitID[1]+1;
				else
					$idHD = "HD0".$SplitID[1]+1;
				
			}
			
			$TrangThai = "pending";
			
			$totalVND = $_POST["total"];
			$splitTotalVND = explode(" ",$totalVND);
			$splitTotalVND2 = explode(".",$splitTotalVND[0]);
			$FinalTotal = "";
			for ($i =0; $i < count($splitTotalVND2); $i++)
			{
				$FinalTotal = $FinalTotal.$splitTotalVND2[$i];
			}
			
			$InsertBill = "insert into hoadon(IDHoaDon, IDKhachHang, TongTien, TrangThai)
							values('".$idHD."','".$IDTaiKhoan."','".$FinalTotal."','".$TrangThai."')";
			
			$QueryBill = mysqli_query($conn, $InsertBill);
			
			if ($QueryBill)
			{
				$GetProductFromCart = "select * from giohang where IDKhachHang = '".$IDTaiKhoan."'";
				$QueryProductFromCart = mysqli_query($conn, $GetProductFromCart);
				while($row = mysqli_fetch_assoc($QueryProductFromCart))
				{
					$IDSanPham = $row["IDSanPham"];
					$SoLuong = $row["SoLuong"];
					
					$GetProductDetail = "select * from sanpham where IDSanPham='".$IDSanPham ."'";
					$QueryProductDetail = mysqli_fetch_assoc(mysqli_query($conn, $GetProductDetail));
					$GiaTien = $QueryProductDetail["DonGia"] *(1-$QueryProductDetail["GiamGia"]/100);
					
					$InsertBillDetails = "insert into chitiethoadon (IDHoaDon, IDSanPham,GiaTien, SoLuong)
											values('".$idHD."','".$IDSanPham ."','".$GiaTien ."','".$SoLuong."')";
					$QueryInsertBillDetails = mysqli_query($conn, $InsertBillDetails);
					
				}
			
				echo $idHD;
			}
			else
				echo "something wrong";
							
			

		}
	}
?>