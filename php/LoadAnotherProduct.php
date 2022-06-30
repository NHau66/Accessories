<?php

    include('Connect.php');
	
	if (isset($_GET["id"]) )
		if ($_GET["id"] != "")
			$cmd = "SELECT * FROM sanpham where IDLoai = (SELECT IDLoai from sanpham WHERE IDSanPham = '".$_GET["id"]."')" ;
		else
			header("location: http://localhost/temp/product.php");
	else
		header("location: http://localhost/temp/product.php");
		
	$sqldata = mysqli_query($conn,$cmd);
    // $rowProduct = "";
    // $rowProduct = mysqli_fetch_assoc($sqldata);
    
    
    // echo $rowProduct['TenSP'];
    // if(mysqli_num_rows($sqldata) > 0)
    // {
    	// while($row = mysqli_fetch_assoc($sqldata))
    	// {
			// echo "id: ".$row['id']." Tên: ".$row['ten']." Loại: ".$row['loai']." Mô tả: ".$row['mo_ta'].";";
    		// echo  $row['IDSanPham']." ".$row['TenSP']." ".$row['DonGia']." ".$row['SoLuong'].";". "<br />";
    	// }
    // }

?>