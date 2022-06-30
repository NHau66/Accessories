<?php

    include('Connect.php');
	
	if (isset($_GET["loai"]) )
		if ($_GET["loai"] != "")
			$cmd = "SELECT * FROM sanpham where IDLoai = '".$_GET["loai"]."'" ;
		else
			header("location: http://localhost/temp/product.php");
	else
		$cmd = "SELECT * FROM sanpham";
		
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