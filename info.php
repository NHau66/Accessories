<?php
	include("./php/CheckSession.php");
	if ($role == 1)
		header("location: ./adminUsers.php");
	else if ($role == "not")
		header("location: ./loginRegister.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories - Info</title>
    <link rel="icon" href="./images/logoweb.png" type="image/x-icon" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style3.css">
	<script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
</head>
<body>
    <!-- Header Stars  -->
    <div class="header-color">
        <div class="container">
            <!-- Logo -->
            <div class="navbar">
                <div class="logo">
                    <!-- Link và thiết lập kích cỡ hình ảnh logo -->
                    <a href="./index.html" class="logo"><span>A</span>ccessories</a>
                </div>
    
            <!-- Thanh công cụ -->
                  <nav>
                     <ul id="MenuItems">
                        <li><a href="index.php">Trang Chủ</a> </li>
                        <li><a href="product.php">Sản phẩm</a> </li>
                        <li><a href="about.php">Giới thiệu</a> </li>
                        <li><a href="contact.php">Liên hệ</a> </li>
                        <li class="header-user">
						<?php
							if (isset($_SESSION['username']) && $_SESSION['username'])
							{
								// echo '<a href="info.php">'.$_SESSION['username'].'</a> ';
								
								
								echo '<a href="./info.php" class="user-link">
										<div class="u-name">
											<span class="user-name">'.$_SESSION['username'].'</span>
										</div>
										<div class="u-img">
											<img src="./images/img-user.jpg" alt="" class="img-user">
										</div>
									</a> ';
                        
							}
							else
								echo '<a href="loginRegister.php">Tài khoản</a>';
						?>
						</li>
                    </ul>
                </nav>
            <!-- Icon mua sắm -->
                <a href="cart.php" class="cart-link">
                    <img src="./images/cart-1.png" class="cart-icon" alt="">
                </a>
                <img src="./images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    </div>

    <!-- Header End  -->

    <!-- Infor -->
    <div class="small-container">
        <div class="contain infor">
            <div class="account">
                <h2 class="acc-username">Hồ sơ của bạn</h2>
                <div class="acc-info">
                    <ul class="acc-list">
                        <li class="acc-item">
                            <h5>Họ và tên:</h5>
                            <input type="text" id = "InfoName" class="address-item" placeholder="Họ và tên">
                        </li>
                        <li class="acc-item">
                            <h5>Email:</h5>
                            <span id = "InfoEmail">abc123@gmail.com</span>
                        </li>
                        <li class="acc-item">
                            <h5>Số điện thoại:</h5>
                            <input type="text" id = "InfoPhone" class="address-item" placeholder="Số điện thoại">
                        </li>
                        <li class="acc-item">
                            <h5>Giới tính:</h5>
                            <input type="radio" name="gender" checked="checked" class="info__sex"> <span style="font-size: 1.1rem; margin: 0 15px 0 5px;">Anh</span>
                            <input type="radio" name="gender" class="info__sex"> <span style="font-size: 1.1rem; margin: 0 5px;">Chị</span>
                        </li>
                        <li class="acc-item">
                            <h5>Địa chỉ:</h5>
                            <div class="address-list">
                                 <input type="text" id = "InfoCity" class="address-item" placeholder="Tỉnh / Thành Phố">
                                <input type="text" id = "InfoDistrict" class="address-item" placeholder="Quận / Huyện">
                                <input type="text" id = "InfoWard" class="address-item" placeholder="Phường / Xã">
                                <input type="text" id = "InfoAddress" class="address-item" placeholder="Số nhà, tên đường">
                            </div>
                        </li>
                    </ul>
                    <div class="acc-btn">
                        <button onclick = "_update()" href="" class="btn btn-save js-btn-save">Lưu</button>

                        <!-- modal -->
                        <div class="modal js-modal">
                            <div class="modal-contain js-modal-contain">
                                <img src="./images/right.png" alt="" class="modal-icon">
                                <p class="modal-text">Lưu thành công!!</p>
                                <a href="" class="agree">Đồng ý</a>
                            </div>
                        </div>
                        <div class="acc-bot">
                            <a href="./changePass.php" class="btn btn-logout">Đổi mật khẩu</a>
                            <a onclick = "logout()" class="btn btn-logout">Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                  <h3>Tải ứng dụng</h3>
                  <p>Tải ứng dụng trên Android và IOS</p>
                   <div class="app-logo">
                       <img src="./images/play-store.png">
                       <img src="./images/app-store.png">
                   </div>
                </div>
                <div class="footer-col-2">
                  <a href="#" class="logo"><span>A</span>ccessories</a>
                  <p></p>
                </div>
                <div class="footer-col-3">
                      <h3>Hỗ trợ</h3>
                      <ul>
                        <li>Kỹ Thuật</li>
                        <li>Tư vấn</li>
                        <li>Chăm sóc khách hàng</li>
                        <li>Đổi trả sản phẩm</li>
                      </ul>
                </div>
                <div class="footer-col-4">
                  <h3>Theo dõi chúng tôi</h3>
                  <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>YouTube</li>
                  </ul>
              </div>
            </div>
            <hr>
        </div>
    </div>
      
	  <script>
	  //------------------- cập nhật thông tin cá nhân ----------------------
			function _update()
			{
				$.ajax({
                    url : "./php/UpdateInfo.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         IDTaiKhoan : <?php echo "'".$_SESSION['IDTaiKhoan']."'"; ?>,
                         Email : document.getElementById("InfoEmail").innerText,
                         Name : $('#InfoName').val(),
                         Phone : $('#InfoPhone').val(),
                         Gender : _checkGender(),
                         City : $('#InfoCity').val(),
                         District : $('#InfoDistrict').val(),
                         Ward : $('#InfoWard').val(),
                         Address : $('#InfoAddress').val()
                    },
                    success : function (result){
                        document.getElementsByClassName("modal-text")[0].innerHTML = result.trim();
                    }
                });
				
			}
	//-----------------load thông tin cá nhân------------------
			<?php
				include("./php/GetInfo.php");
			?>
			var item0 = document.getElementsByClassName("acc-item")[0].getElementsByClassName("address-item")[0];
			item0.value = <?php echo "'".$row["HoTen"]."'"; ?>;
			
			var item1 = document.getElementsByClassName("acc-item")[1].getElementsByTagName("span")[0];
			item1.innerHTML = <?php echo "'".$row["TaiKhoan"]."'"; ?>;
			
			var item2 = document.getElementsByClassName("address-item")[1];
			item2.value = <?php echo "'".$row["SDT"]."'"; ?>;
			
			var GioiTinh = <?php echo "'".$row["GioiTinh"]."'"; ?>;
			if (GioiTinh == "Nam")
				document.getElementsByClassName("info__sex")[0].checked = true;
			else
				document.getElementsByClassName("info__sex")[1].checked = true;
			
			
			var DiaChi = <?php echo "'".$row["DiaChi"]."'"; ?>;
			var SplitDiaChi = DiaChi.split("|");
			for(var i = 0; i< SplitDiaChi.length; i++)
			{
				document.getElementsByClassName("address-item")[i+2].value = SplitDiaChi[i];
			}
	  
	  
	 // ------------------ hàm check giới tính -----------------
			function _checkGender()
			{
				var boy = document.getElementsByClassName("info__sex")[0].checked;
				var girl = document.getElementsByClassName("info__sex")[1].checked;
				if (boy == true)
					return "Nam";
				return "Nữ";
				
			}
			
	// -------------------hàm đăng xuất----------------------
			function logout(){
				$.ajax({
                    url : "./php/Logout.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         
                    },
                    success : function (result){
                        document.location.href = "loginRegister.php";
                    }
                });
				
			}
	  
      </script>
	  
      <!-- js for toggle menu --> 
      <script>
          var MenuItems =document.getElementById("MenuItems");

          MenuItems.style.maxHeight = "0px";

          function menutoggle(){
              if(MenuItems.style.maxHeight =="0px")
                {
                    MenuItems.style.maxHeight ="200px"
                }
            else
                {
                    MenuItems.style.maxHeight ="0px"

                }

          }
      </script>

      <!-- js modal -->
      <script>
          const saveBtns = document.querySelectorAll('.js-btn-save')
          const modal = document.querySelector('.js-modal')
          const modalContain = document.querySelector('.js-modal-contain')

          function showSave() {
            modal.classList.add('open')
          }

          function hideSave() {
            modal.classList.remove('open')
          }

          for (const saveBtn of saveBtns) {
                saveBtn.addEventListener('click', showSave)
          }

          modal.addEventListener('click',hideSave)

          modalContain.addEventListener('click',function (event) {
              event.stopPropagation()
          })
      </script>

</body>
</html>