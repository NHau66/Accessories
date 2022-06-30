<?php
	
	
	include("./php/CheckSession.php");

	if ($role == 1)
		header("location: ./adminUsers.php");
	else if ($role == 0)
		header("location: ./info.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories - Login/Resgister</title>
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
                        <li>
						<?php
							if (isset($_SESSION['username']) && $_SESSION['username'])
							{
								echo '<a href="info.php">'.$_SESSION['username'].'</a> ';								
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

    <!-- Login Resgister -->
    <div class="small-container">
        <div class="contain loginRes">
            <div class="card">
                <div class="inner-box" id="card">
                    <div class="card-front">
                        <div class="about-logo" style="text-align: center;">
                            <a href="./index.php" class="logo about-logo-img"><span>A</span>ccessories</a>
                        </div>
						
					
                        <h2>Đăng Nhập</h2>
                        
                            <input type="email" class="input-box" id = "_loginUser" name="txtUsername" placeholder="Email" required>
                            <input type="password" class="input-box" name="txtPassword" id = "_loginPass" placeholder="Mật khẩu" required>
                            <input type="checkbox" class="card-check"><span class="checkpass" id = "checkpass">Nhớ mật khẩu</span>
							
							
                            <button type="submit" onclick="_login()" class="submit-btn">Đăng Nhập</button>
                        
						
						
						
						
                        <a href="" class="card-forgot">Quên mật khẩu?</a>
                        <button type="button" class="btnL" onclick="openRegister()">Tạo tài khoản</button>
                    </div>

                    <div class="card-back">
                        <div class="about-logo" style="text-align: center;">
                            <a href="./index.html" class="logo about-logo-img"><span>A</span>ccessories</a>
                        </div>
                        <h2>Đăng Ký</h2>
					
                        
                            <div class="card-form">
                                <input type="text" class="input-box" name="txtHoTen" id = "IDName" onfocus="_CheckFocus()" placeholder="Họ và tên" required>
                                <input type="email" class="input-box" name="txtTaiKhoan" id = "IDEmail" onfocus="_CheckFocus()" placeholder="Email" required>
                                <input type="password" id="password" name="txtMatKhau"  class="input-box" onfocus="_CheckFocus()" placeholder="Mật khẩu" required>
                                <p id="message">Mật khẩu ở mức độ <span id="strenght"></span></p>
                                <input type="password" class="input-box" id = "IDPassAgain" onkeyup="CheckPass()" onfocus="_CheckFocus()" placeholder="Nhập lại mật khẩu" required>
								<p id="message1" style="display: block; color: rgb(255, 89, 37);"></p>
                            </div>
							
                            <button type="submit" onclick="_register()" class="submit-btn">Đăng Ký</button>
							<p id="message2" style="display: block; color: rgb(255, 89, 37);"></p>
						
						
                        <button type="button" class="btnL" onclick="openLogin()">Tôi có tài khoản</button>
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
      
      <!-- js for toggle menu -->
      <script>
		function _CheckFocus()
		{
			
			document.getElementById("message2").innerHTML = "";
		}
		
		function _login()
		{
			 $.ajax({
                    url : "./php/Login.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         Username : $('#_loginUser').val(),
                         Pass : $('#_loginPass').val(),
                         
                    },
                    success : function (result){
                        // $('#message3').html(result);
						if (result.trim() != "Sai tài khoản hoặc mật khẩu. Vui lòng kiểm tra lại.")
						{
							document.location.href = "./product.php";
						}
						else
							alert(result.trim());
                    }
                });
		}
		
		function _register(){
                $.ajax({
                    url : "./php/Register.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         Name : $('#IDName').val(),
                         Email : $('#IDEmail').val(),
                         Pass : $('#password').val(),
                         PassAgain : $('#IDPassAgain').val()
                    },
                    success : function (result){
                        $('#message2').html();
						if (result.trim() == "Quá trình đăng ký thành công.")
						{
							document.location.href = "./loginRegister.php";
						}
						else
							alert(result.trim());
                    }
                });
            }
			
			
			
		function CheckPass()
		{
			var Pass = document.getElementsByClassName("input-box")[5].value;
			var PassAgain = document.getElementsByClassName("input-box")[4].value;
			var Register = document.getElementsByClassName("submit-btn")[1];
			if (PassAgain != Pass)
			{
				document.getElementById("message1").innerHTML = "Mật khẩu không khớp";
				
			}
			else 
			{
				document.getElementById("message1").innerHTML = "";
				
			}
			
		}
			
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


      <!-- js animation Login Register -->
      <script>

        var card = document.getElementById("card");

        function openRegister(){
            card.style.transform = "rotateY(-180deg)";
        }
        function openLogin(){
            card.style.transform = "rotateY(0deg)";
        }

      </script>

      <!-- js độ an toàn -->
      <script>

          var pass = document.getElementById("password");
          var msg = document.getElementById("message");
          var str = document.getElementById("strenght");

        pass.addEventListener('input', () => {
            if(pass.value.length > 0){
                msg.style.display = "block";
            }
            else{
                msg.style.display = "none";
            }
            if(pass.value.length == 0){
                pass.style.borderColor = "#0674ec";
            }
            else if(pass.value.length < 4){
                str.innerHTML = "yếu";
                pass.style.borderColor = "#ff5925";
                msg.style.color = "#ff5925";
            }
            else if(pass.value.length >= 4 && pass.value.length < 8){
                str.innerHTML = "trung bình";
                pass.style.borderColor = "yellow";
                msg.style.color = "yellow";
            }
            if(pass.value.length >= 8){
                str.innerHTML = "mạnh";
                pass.style.borderColor = "#26d730";
                msg.style.color = "#26d730";
            }


        })

      </script>

</body>
</html>