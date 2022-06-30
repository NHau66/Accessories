<?php
	


	include("./php/CheckSession.php");
	if ($role == 1)
		header("location: ./adminUsers.php");

	else if ($role == "not")
	{
		header("location: ./loginRegister.php");
		
	}
	else if ($role == "0")
	{	
		include('./php/Connect.php');
		$IDTaiKhoan = $_GET['userid'];
	
		if ($_SESSION['IDTaiKhoan'] == $IDTaiKhoan)
		{
			$IDHoaDon = $_GET['idHD'];
			$cmd = "select * from hoadon where IDHoaDon = '".$IDHoaDon."' and IDKhachHang='".$IDTaiKhoan."'";
			
			$query = mysqli_query($conn, $cmd);
			if(mysqli_num_rows($query) == 0 or mysqli_fetch_assoc($query)["TrangThai"] != "pending")
			{
				header("location: ./index.php");
			}
		}
		else
			header("location: ./index.php");
			
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories - Order</title>
    <link rel="icon" href="./images/logoweb.png" type="image/x-icon" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style2.css">
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

    <!-- Order -->
    <div class="small-container">
       
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
			//ảnh
			//tên sp
			//số lượng trong đơn hàng
			//Giảm giá
			//tổng tiền của lượng sản phẩm đó
			<?php include ("./php/LoadChiTietHoaDon.php"); 
					while($row = mysqli_fetch_assoc($query))
				{
					$Total = $row["GiaTien"];
					$SoLuong = $row["SoLuong"];
					
					$CMDProduct= "select * from sanpham where IDSanPham = '".$row["IDSanPham"]."'";
					$QueryProduct = mysqli_fetch_assoc(mysqli_query($conn, $CMDProduct));
					
					$ProductName = $QueryProduct["TenSP"];
					$Img = $QueryProduct["Img"];
					$Discount = $QueryProduct["GiamGia"];
					
			?>;
					
				var IMG = <?php echo "'".$Img."'";?>;
				var Name = <?php echo "'".$ProductName."'";?>;
				var SoLuong = <?php echo $SoLuong  ;?>;
				var GiamGia = <?php echo $Discount;  ?>;
				var Total = <?php echo "'".number_format($Total, $decimals = 0 , $dec_point = "." , $thousands_sep = ".")."'";?>;
				LoadItem(IMG,Name,SoLuong,GiamGia,Total);
			<?php 
				}
			?>
			function LoadItem(IMG,Name,SoLuong,GiamGia,Total)
			{
				var stringHTML = '<div class="cart-product">' +
									'<img src="' + IMG + '" alt="" class="cart-product-img">' +
									'<div class="cart-product__info">' +
										'<ul class="cart-product__item">' +
											'<li class="cart-product__name">' + Name + '</li>' + 
											'<li class="cart-product-number"><b>Số lượng:</b> ' +
												'<span style="font-size: 1.2rem;">' + SoLuong + '</span>' +
											'</li> ' +                    
											'<li class="cart-product-color"><b>Giảm giá: </b>' + 
												'<span style="font-size: 1.2rem;">' + GiamGia + '%</span>' +
											'</li>' +
											'<li class="cart-product__current">' + Total + ' VNĐ</li></ul></div></div>' ;
										
									
								
				document.getElementsByClassName("small-container")[0].innerHTML += stringHTML;
				
			}
			<?php include("./php/GetInfo.php"); ?>
			
			document.getElementsByClassName("small-container")[0].innerHTML += '<div class="flex">' +
																			'<div class="cart-custom-info">'+
																				'<h2 style="margin: 15px 0;">THÔNG TIN KHÁCH HÀNG</h2>'+
																				'<input type="radio" name="gender" checked="checked" class="info__sex"> <span style="font-size: 1.1rem; margin: 0 5px;">Anh</span>'+
																				'<input type="radio" name="gender" class="info__sex"> <span style="font-size: 1.1rem; margin: 0 5px;">Chị</span>'+
																				'<div class="info__input" style="display:flex; margin: 10px 0;">'+
																					'<input type="text" class="info__import" readonly placeholder="Họ và Tên" value ="'+<?php echo '"'.$row["HoTen"].'"';?> +'">'+
																					'<input type="text" class="info__import" readonly placeholder="Số điện thoại" value ="'+<?php echo '"'.$row["SDT"].'"';?> +'">'+
																				'</div>'+
																				'<h3 style="margin: 15px 0 10px;">THỜI GIAN NHẬN HÀNG:</h3>'+
																				'<h4 style="margin-bottom: 10px;">(Chỉ áp dụng giao hàng tận nơi)</h4>'+
																				'<div class="info__address" style="width: 640px; height: 160px; background-color: #f6f6f6;">'+
																					'<h4 style="padding: 15px 0 0 15px;">'+
																						'Chọn địa chỉ để biết thời gian nhận hàng và phí giao hàng '+
																					'</h4> '+
																					'<div class="address-list" style="margin: 15px 0 10px 10px;">'+
																						'<input type="text" class="address-item" placeholder="Tỉnh / Thành Phố">'+
																						'<input type="text" class="address-item" placeholder="Quận / Huyện">'+
																						'<input type="text" class="address-item" placeholder="Phường / Xã">'+
																						'<input type="text" class="address-item" placeholder="Số nhà, tên đường">'+
																					'</div>'+
																				'</div>'+
																	
																				'<input type="text" class="info__request" placeholder="Yêu cầu khác (không bắt buộc)">'+
																			'</div>'+
																			'<div class="pay">'+
																				'<h2 style="margin: 15px 0; padding-top: 5px;">PHƯƠNG THỨC THANH TOÁN</h2>'+
																				'<ul class="pay-method">'+
																					'<li class="pay-item">'+
																						'<input type="radio" name="radio" checked="checked" class="pay-option"> <span class="pay-opt">Thanh toán khi giao hàng</span>'+
																					'</li>'+
																					'<li class="pay-item">'+
																						'<input type="radio" name="radio" class="pay-option"> <span class="pay-opt">Thoánh toán online qua thẻ ATM</span>'+
																					'</li>'+
																					'<li class="pay-item">'+
																						'<input type="radio" name="radio" class="pay-option"> <span class="pay-opt">Chuyển khoản qua ngân hàng</span>'+
																					'</li>'+
																					'<li class="pay-item">'+
																						'<input type="radio" name="radio" class="pay-option"> <span class="pay-opt">Thanh toán qua Momo</span>'+
																					'</li>'+

																				'</ul>'+
																			'</div>'+
																		'</div>'+

																		'<div class="cart-total">'+
																			'<div class="total-money-in-all" style="display:flex;align-items: center; justify-content: space-between; margin: 10px 300px 0 0; width: 100%;">'+
																				'<h3>Tổng tiền:  </h3>'+
																				'<div class="total">'+<?php include("./php/LoadHoaDon.php"); echo "'".$Total."'"; ?>+' VNĐ</div>'+
																				'<a onclick= "_cancel()"  class="btn btn-cancel" >Hủy đơn</a>'+
																			
																				'<button onclick= "_order()" class="btn js-btn-order">Đặt hàng</button>'+
																				'<!-- modal -->'+
																				'<div class="modal js-modal">'+
																					'<div class="modal-contain js-modal-contain">'+
																						'<img src="./images/right.png" alt="" class="modal-icon">'+
																						'<p class="modal-text"></p>'+
																						'<a href="./index.php" class="agree">Đồng ý</a>'+
																					'</div>'+
																				'</div>'+
																			'</div>'+
																		'</div>'
			
	  
      </script>
	  
	  
	  <script>
	  
		  //-----------------------Load địa chỉ--------------
		  
			 var DiaChi = <?php echo "'".$DiaChi."'"; ?>;
			var SplitDiaChi = DiaChi.split("|");
			for(var i = 0; i< SplitDiaChi.length; i++)
			{
				document.getElementsByClassName("address-item")[i].value = SplitDiaChi[i];
			}
			  
		  
		  // ----------------------Thanh toán--------------------
																		// ;
			function _order()
		{
			var DiaChi = "";
			for(var i = 0; i< SplitDiaChi.length; i++)
			{
				DiaChi = DiaChi + document.getElementsByClassName("address-item")[i].value + "|";
			}
			
			var PayOption = "";
			for(var i = 0; i< 4; i++)
			{
				GetPayOption = document.getElementsByClassName("pay-option")[i].checked ;
				if (GetPayOption == true)
				{
					
					if (i ==0) 
						PayOption = "TrucTiep";
					else if (i ==1) 
						PayOption = "ATM";
					else if (i ==2) 
						PayOption = "Banking";
					else if(i ==3) 
						PayOption = "Momo";
					break;
				}
				
			}
			
			var YeuCauKhac = document.getElementsByClassName("info__request")[0].value;
			console.log(YeuCauKhac);
			 $.ajax({
                    url : "./php/PayBill.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         IDHoaDon : <?php echo "'". $_GET['idHD']. "'"; ?>,
						 DiaChiNhan: DiaChi,
                         PhuongThucThanhToan: PayOption,
						 YeuCauKhac: YeuCauKhac
                         
                    },
                    success : function (result){
                        document.getElementsByClassName("modal-text")[0].innerHTML = result;
						console.log(result);
                    }
                });
		}
			
	  
	  
	  
	     // ---------------------Hủy đơn hàng --------------------
	  
			function _cancel()
		{
			 $.ajax({
                    url : "./php/CancelBill.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         IDHoaDon : <?php echo "'". $_GET['idHD']. "'"; ?>
						 
                         
                         
                    },
                    success : function (result){
                        document.getElementsByClassName("modal-text")[0].innerHTML = result;
						console.log(result);
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
        const orderBtns = document.querySelectorAll('.js-btn-order')
        const modal = document.querySelector('.js-modal')
        const modalContain = document.querySelector('.js-modal-contain')

        function showOrder() {
          modal.classList.add('open')
        }

        function hideOrder() {
          modal.classList.remove('open')
        }

        for (const orderBtn of orderBtns) {
            orderBtn.addEventListener('click', showOrder)
        }

        modal.addEventListener('click',hideOrder)

        modalContain.addEventListener('click',function (event) {
            event.stopPropagation()
        })
		
		
		
		const orderBtns2 = document.querySelectorAll('.btn-cancel')
        const modal2 = document.querySelector('.js-modal')
        const modalContain2 = document.querySelector('.js-modal-contain')

        function showOrder() {
          modal2.classList.add('open')
        }

        function hideOrder() {
          modal2.classList.remove('open')
        }

        for (const orderBtn2 of orderBtns2) {
            orderBtn2.addEventListener('click', showOrder)
        }

        modal2.addEventListener('click',hideOrder)

        modalContain2.addEventListener('click',function (event) {
            event.stopPropagation()
        })
		
		
    </script>
</body>
</html>