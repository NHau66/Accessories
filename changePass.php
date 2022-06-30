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
    <title>Accessories - Change Password</title>
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

    <!-- Change password -->
    <div class="small-container">
        <div class="contain changePass">
            <div class="change-pass">
                <h2 class="change-title">Đổi mật khẩu</h2>
                <div class="change-info">
                    <ul class="change-list">
                        
                        <li class="change-item">
                            <h5>Mật khẩu hiện tại:</h5>
                            <input type="password" class="input-box" id="OldPass" placeholder="Mật khẩu hiện tại" required>
                        </li>
                        <li class="change-item">
                            <h5>Mật khẩu mới:</h5>
                            <input type="password" class="input-box" id="NewPass" placeholder="Mật khẩu mới" required>
                        </li>
                        <li class="change-item">
                            <h5>Xác nhận mật khẩu:</h5>
                            <input type="password" class="input-box" id="NewPassAgain" placeholder="Xác nhận mật khẩu" required>
                        </li>
                    </ul>
                    <div class="change-btn">
                        <button onclick="_ChangePass()" class="btn btn-confirm js-btn-confirm">Xác nhận</button>

                        <!-- modal -->
                        <div class="modal js-modal">
                            <div class="modal-contain js-modal-contain">
                                <img src="./images/right.png" alt="" class="modal-icon">
                                <p class="modal-text">Đổi mật khẩu thành công!!</p>
                                <a href="./info.php" class="agree">Đồng ý</a>
                            </div>
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
			function _ChangePass()
		{
			 $.ajax({
                    url : "./php/NewPass.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         OldPass : $('#OldPass').val(),
                         NewPass : $('#NewPass').val(),
                         PassAgain : $('#NewPassAgain').val()
                         
                    },
                    success : function (result){
                        // $('.modal-text').html(result);
						if(result.trim() == "Need to login")
							document.location.href = "./loginRegister.php";
						else if (result.trim() == "Not match")
							document.getElementsByClassName("modal-text")[0].innerHTML = "mật khẩu mới và xác nhận mật khẩu không khớp";
						else 
							document.getElementsByClassName("modal-text")[0].innerHTML = result.trim();
						console.log( result.trim());
						
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
        const saveBtns = document.querySelectorAll('.js-btn-confirm')
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