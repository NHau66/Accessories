<?php
	
	
	include("./php/CheckSession.php");
	if ($role == 1)
		header("location: ./adminUsers.php");
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories</title>
    <link rel="icon" href="./images/logoweb.png" type="image/x-icon" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style2.css">
</head>
<body>
    <!-- Header Stars  -->
    <div class="header">
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
                    <img src="./images/cart-1.png" class="cart-icon" alt="" style="color: #fff;">
                </a>
                <img src="./images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <!-- Slogan -->
                    <h1>Mua sắm thả ga với giá cả phải chăng </h1>
                    <!-- Nội dung -->
                    <p>
                        Bạn đang phân vân để tìm cho mình một cửa hàng phụ kiện chất lượng, đa dạng sản phẩm và giá thành phù hợp nhất.
                        Vậy thì đừng chần chờ thêm nữa mà hãy đến ngay với... 
                        Tại đây chúng tôi cung cấp đầy đủ các loại phụ kiện với nhiều mẫu mã và thương hiệu đa dạng, ngoài ra khi đến thăm quan mua sắm bạn còn cơ hội nhận được nhiều ưu đãi giá trị.
                        Đừng chần chờ gì nữa mà hãy đến với Accessories ngay hôm nay.
                    </p>
                    <!-- Nút khám phá -->
                    <!-- &#8594 là dấu mũi tên, có thể xem thêm các html icon code khác trên Google -->
                    <a href="#discover" class="btn">Khám phá ngay &#8594;</a>
                </div>
                <!-- Ảnh bìa -->
                <div class="col-2">
                    <img src="./images/background.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End  -->

    <!--Featured Categories -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="./images/category-1.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="./images/category-2.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="./images/category-3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!--Featured Products -->
        <div id="discover" class="small-container">
            <h2 class="title">Sản phẩm nổi bật</h2>
            <div class="row">
                <div class="col-4">
                    <a href="./product-detail.php?id=SP001" class="product__detail">
                        <img src="./images/product-1.jpg" alt="">
                        <h4>Tai nghe chụp tai Beats Studio3 Wireless MX422/ MX432</h4>
                        <div class="price"> 4.990.000 VNĐ</div>
                        <div class="old-price">5.390.000 VNĐ</div>
                    </a>
                </div>

                <div class="col-4">
                    <a href="./product-detail.php?id=SP002" class="product__detail">
                        <img src="./images/product-2.jpg" alt="">
                        <h4>Tai nghe Bluetooth True Wireless Sony WF-1000XM4</h4>
                        <div class="price"> 6.490.000 VNĐ </div>
                        <div class="old-price">6.890.000 VNĐ</div>
                    </a>
                </div>

                <div class="col-4">
                    <a href="./product-detail.php?id=SP003" class="product__detail">
                        <img src="./images/product-3.jpg" alt="">
                        <h4>Tai nghe chụp tai Beats Studio3 Wireless MX422/ MX432</h4>
                        <div class="price"> 7.490.000 VNĐ</div>
                        <div class="old-price">7.890.000 VNĐ</div>
                    </a>
                </div>

                <div class="col-4">
                    <a href="./product-detail.php?id=SP004" class="product__detail">
                        <img src="./images/product-4.jpg" alt="">
                        <h4>Tai nghe Bluetooth True wireless Belkin Soundform Move PAC001</h4>
                        <div class="price"> 1.229.000 VNĐ </div>
                        <div class="old-price">1.629.000 VNĐ</div>
                    </a>
                </div>
            </div>
            <h2 class="title">Sản phẩm bán chạy</h2>
            <div class="row">
                <div class="col-4">
                    <a href="./product-detail.php?id=SP005" class="product__detail">
                        <img src="./images/product-5.jpg" alt="">
                        <h4>Pin sạc dự phòng Polymer Type C 30W PD Belkin Pocket Power BPB002</h4>
                        <div class="price">1.900.000 VNĐ</div>
                        <div class="old-price">2.300.000 VNĐ</div>
                    </a>
                </div>

                <div class="col-4">
                    <a href="./product-detail.php?id=SP006" class="product__detail">
                        <img src="./images/product-6.jpg" alt="">
                        <h4>Ốp lưng Galaxy A22 LTE nhựa dẻo Soft Clear Samsung Trong</h4>
                        <div class="price">200.000 VNĐ</div>
                        <div class="old-price">240.000 VNĐ</div>
                    </a>
                </div>

                <div class="col-4">
                    <a href="./product-detail.php?id=SP007" class="product__detail">
                        <img src="./images/product-7.jpg" alt="">
                        <h4>Cáp Type C 2m AVA+ DS08C</h4>
                        <div class="price">150.000 VNĐ</div>
                        <div class="old-price">190.000 VNĐ</div>
                    </a>
                </div>

                <div class="col-4">
                    <a href="./product-detail.php?id=SP008" class="product__detail">
                        <img src="./images/product-8.jpg" alt="">
                        <h4>Adapter sạc USB 5W AVA+ DS016-BG</h4>
                        <div class="price">120.000 VNĐ</div>
                        <div class="old-price">160.000 VNĐ</div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <a href="./product-detail.php?id=SP009" class="product__detail">
                        <img src="./images/product-9.jpg" alt="">
                        <h4>Túi đựng Airpods Pro Nhựa dẻo Carton Silicone JM</h4>
                        <div class="price">150.000 VNĐ</div>
                        <div class="old-price">190.000 VNĐ</div>
                    </a>
                </div>

                <div class="col-4">
                    <a href="./product-detail.php?id=SP010" class="product__detail">
                        <img src="./images/product-10.jpg" alt="">
                        <h4>Loa Bluetooth Anker Soundcore Motion Q A3108</h4>
                        <div class="price">1.500.000 VNĐ</div>
                        <div class="old-price">1.900.000 VNĐ</div>
                    </a>
                </div>

                <div class="col-4">
                    <a href="./product-detail.php?id=SP011" class="product__detail">
                        <img src="./images/product-11.jpg" alt="">
                        <h4>Gậy chụp ảnh Bluetooth Tripod Xmobile K06</h4>
                        <div class="price">300.000 VNĐ</div>
                        <div class="old-price">340.000 VNĐ</div>
                    </a>
                </div>

                <div class="col-4">
                    <a href="./product-detail.php?id=SP012" class="product__detail">
                        <img src="./images/product-12.jpg" alt="">
                        <h4>Ốp lưng iPad Air 4 2020 10.9 inch Wifi Nhựa dẻo Skin Shock JM Navy</h4>
                        <div class="price">750.000 VNĐ</div>
                        <div class="old-price">790.000 VNĐ</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- offer  -->
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="./images/tainghesony.png" class="offer-img">
                    </div>
                    <div class="col-2">
                        <p>Đặt mua ngay hôm nay để nhận được nhiều ưu đãi hấp dẫn</p>
                        <h1>Tai nghe Bluetooth True Wireless Sony WF-1000XM4</h1>
                        <small>Nếu bạn muốn có một chiếc tai nghe thông minh thì chắc chắn, bạn sẽ không thể bỏ qua Tai nghe Bluetooth True Wireless Sony WF-1000XM4. Tin vui là bây giờ, Tai nghe Bluetooth True Wireless Sony WF-1000XM4 đã có mặt tại hệ thống bán lẻ của..., hãy nhanh tay để có cơ hội sỡ hữu chiếc tai nghe tuyệt vời này với mức giá ưu đãi.</small>
                        <br>
                        
                    </div>
                </div>
            </div>
        </div>

       <!-- brands -->
       <div class="brands">
           <div class="small-container">
               <div class="row">
                   <div class="col-5">
                       <img src="./images/logo-samsung.png">
                   </div> 
                    <div class="col-5">
                        <img src="./images/logo-sony.png">
                    </div>
                    <div class="col-5">
                        <img src="./images/logo-anker.png">
                    </div>
                    <div class="col-5">
                        <img src="./images/Apple.png">
                    </div>
                    <div class="col-5">
                        <img src="./images/logo-huawei.png">
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
</body>
</html>