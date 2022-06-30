<?php
	
    include('Connect.php');
	// session_start();
	
	
	
	// $IDTaiKhoan = $_SESSION['IDTaiKhoan'];
	$cmd = "select * from giohang where IDKhachHang = '".$_SESSION['IDTaiKhoan']."'";
	$query = mysqli_query($conn, $cmd);
		
		
	
	
	
?>