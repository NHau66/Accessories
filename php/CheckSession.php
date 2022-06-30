


<?php
	include('Connect.php');
	session_start();
	$role = "not";
	if (isset($_SESSION['username']) && $_SESSION['username'])
	{
		$cmd = "select Quyen from taikhoan where TaiKhoan = '".$_SESSION['username']."'";
		$query = mysqli_query($conn, $cmd);
		$row = mysqli_fetch_assoc($query);
		
		$role = $row["Quyen"];
		
		
	}
	
	// echo $role;
?>