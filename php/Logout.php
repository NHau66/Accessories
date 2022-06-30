<?php
	
		session_start();
		if (isset($_SESSION['username']) or isset($_SESSION['IDTaiKhoan'])){
			unset($_SESSION['username']); // xóa session login
			unset($_SESSION['IDTaiKhoan']); // xóa session login
		}
	
?>