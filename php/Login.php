<?php

    include('Connect.php');
	session_start();
    $Username = isset($_POST['Username']) ? $_POST['Username']: "Chưa nhập email";
	$Pass = isset($_POST['Pass']) ? $_POST['Pass']: "Chưa nhập mật khẩu";
	
	
	//Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($conn,"SELECT * FROM taikhoan WHERE TaiKhoan = '$Username' and MatKhau = '$Pass'");
    
	if (mysqli_num_rows($query) == 0) 
	{
        echo "Sai tài khoản hoặc mật khẩu. Vui lòng kiểm tra lại.";
    }
	
	else
	{
		$row = mysqli_fetch_assoc($query);
		session_start();
		//Lưu tên đăng nhập
		$_SESSION['username'] = $Username;
		$_SESSION['IDTaiKhoan'] = $row["IDTaiKhoan"];
		
	}

?>