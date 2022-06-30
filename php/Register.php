<?php

//Nhúng file kết nối với database
    include('Connect.php');
	
// Nhập giá trị bằng phương thức post
$Name = isset($_POST['Name']) ? $_POST['Name'] : "Chưa nhập họ và tên";
$Email = isset($_POST['Email']) ? $_POST['Email']: "Chưa nhập email";
$Pass = isset($_POST['Pass']) ? $_POST['Pass']: "Chưa nhập mật khẩu";
$PassAgain = isset($_POST['PassAgain']) ? $_POST['PassAgain']: "Chưa nhập xác nhận mật khẩu";

 
 
//Kiểm tra 2 pass có giống nhau hay không
if ($Pass != $PassAgain)
{
	echo "Mật khẩu không khớp";

}
 else
 {
	// Kiểm tra tên đăng nhập này đã có người dùng chưa
	$query = mysqli_query($conn,"SELECT * FROM taikhoan WHERE TaiKhoan = '$Email'");
			
	if (mysqli_num_rows($query) > 0)
	{
		echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác.";
	}
	else
	{	  
		$maxstt = mysqli_query($conn,"SELECT IDTaiKhoan FROM taikhoan ORDER by IDTaiKhoan DESC LIMIT 1");
		$row = mysqli_fetch_assoc($maxstt);
		
			
			
		if ($row ==null)
		{
			$idTK = 'TK001';
		}
		else
		{
			$IDTaiKhoan = $row["IDTaiKhoan"];
			$SplitID = explode("TK", $IDTaiKhoan);
			If ($SplitID[1] < 9 and $SplitID[1] >0)
				$idTK = "TK00".$SplitID[1]+1;
			else
				$idTK = "TK0".$SplitID[1]+1;
			
		}

		$sql = "INSERT INTO taikhoan 
				(
					IDTaiKhoan,
					TaiKhoan,
					MatKhau
				)
				VALUE (
					'{$idTK}',
					'{$Email}',
					'{$Pass}'
				)";
				
		mysqli_query($conn, $sql);


		//Lưu thông tin thành viên vào bảng
		$addmember = mysqli_query($conn, "INSERT INTO thongtinkhachhang (IDKhachHang,	HoTen)
											VALUE (	'{$idTK}',	'{$Name}')");

		//Thông báo quá trình lưu
		if ($addmember)
			echo "Quá trình đăng ký thành công.";
		else
			echo "Có lỗi xảy ra trong quá trình đăng ký. ";
	}
 }

?>