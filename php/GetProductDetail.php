<?php

		
    include('Connect.php');
	if(isset($_GET["id"]))
	{
		$ID = $_GET["id"];
		$query = "SELECT SP.TenSP, SP.DonGia, SP.GiamGia, CT.ThongSoKiThuat, CT.DacDiemNoiBat, CT.HinhAnh 
					from sanpham as SP, chitietsanpham as CT 
					WHERE SP.IDSanPham = '".$ID."' and CT.IDSanPham = '".$ID."'";
					
		
		$sqldata = mysqli_query($conn,$query );
		
			while($row = mysqli_fetch_assoc($sqldata))
			{
				$Img = $row['HinhAnh'];
				// echo $Img. "<br />";
				// echo "id: ".$row['IDSanPham']." Tên: ".$row['ThongSoKiThuat']." Loại: ".$row['DacDiemNoiBat']." Mô tả: ".$row['HinhAnh'].";";
				// echo  $row['IDSanPham']." ".$row['TenSP']." ".$row['DonGia']." ".$row['SoLuong'].";". "<br />";
				$GetLinkImg = explode(',', $Img);
				$Img0 = $GetLinkImg[0];
				$Img1 = $GetLinkImg[1];
				$Img2 = $GetLinkImg[2];
				$Img3 = $GetLinkImg[3];
				$Name = $row['TenSP'];
				$OldPrice = number_format($row["DonGia"], $decimals = 0 , $dec_point = "." , $thousands_sep = ".");
				$NewPrice = number_format($row["DonGia"] * (1-$row["GiamGia"] /100), $decimals = 0 , $dec_point = "." , $thousands_sep = ".");
				
				
				
				$GetThongSoKiThuat = explode(',', $row['ThongSoKiThuat']);
				$GetDacDiem = explode('.', $row['DacDiemNoiBat']);
				
				
			}
	}
	else if (isset($_POST["idProduct_GetDetails"]))
	{
		$query = "SELECT ThongSoKiThuat, DacDiemNoiBat
					from chitietsanpham 
					WHERE IDSanPham ='".$_POST["idProduct_GetDetails"]."'";
		$sqldata = mysqli_query($conn,$query );
		$getdata = mysqli_fetch_assoc($sqldata);
		echo $getdata["ThongSoKiThuat"]."||".$getdata["DacDiemNoiBat"];
	
	}
	
	else if (isset($_POST["idProduct_Edit"]))
	{
		$query = "select SP.IDSanPham, SP.TenSP, SP.DonGia, SP.GiamGia, SP.SoLuong, LSP.TenLoai, LSP.IDLoai, CT.ThongSoKiThuat, CT.DacDiemNoiBat
					FROM loaisp as LSP, sanpham as SP, chitietsanpham as CT
					WHERE  SP.IDSanPham = CT.IDSanPham and  SP.IDSanPham='".$_POST["idProduct_Edit"]."' and LSP.IDLoai = SP.IDLoai";
		$sqldata = mysqli_query($conn,$query );
		$row = mysqli_fetch_assoc($sqldata);
		
		$result = $row["TenSP"]."#".$row["DonGia"]."#".$row["GiamGia"]."#".$row["TenLoai"]."#".$row["ThongSoKiThuat"]."#".$row["DacDiemNoiBat"]."#".$row["IDLoai"]."#".$row["IDSanPham"]."#".$row["SoLuong"];
	
		echo $result;
	
	}
	
	else if (isset($_GET["loai"]))
	{
		$query = "SELECT SP.TenSP, SP.DonGia, SP.GiamGia, SP.SoLuong, CT.ThongSoKiThuat, CT.DacDiemNoiBat, CT.HinhAnh ,CT.IDSanPham
					from sanpham as SP, chitietsanpham as CT 
					WHERE SP.IDSanPham = CT.IDSanPham and SP.IDLoai = '".$_GET["loai"]."'";
		$sqldata = mysqli_query($conn,$query );
		// $row = mysqli_fetch_assoc($sqldata);
		
	
		
	
	}
	
	else
	{
		$query = "SELECT SP.TenSP, SP.DonGia, SP.GiamGia, SP.SoLuong, CT.ThongSoKiThuat, CT.DacDiemNoiBat, CT.HinhAnh ,CT.IDSanPham
					from sanpham as SP, chitietsanpham as CT 
					WHERE SP.IDSanPham = CT.IDSanPham ";
					
		
		$sqldata = mysqli_query($conn,$query );
			
	}
	
 

?>