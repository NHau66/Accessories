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
    <title>Accessories - Cart</title>
    <link rel="icon" href="./images/logoweb.png" type="image/x-icon" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

    <!-- cart itmes -->
    <div class="small-container" style ="min-height: 450px;">
		<p style="font-size:300%;color:black;">Giỏ hàng của bạn</p>
        
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
		<?php include "./php/LoadCart.php";
			if(mysqli_num_rows($query) > 0)
			{	$Total = 0;
				while($row = mysqli_fetch_assoc($query))
				{
					$GetProduct = "select * from sanpham
									where IDSanPham = '".$row["IDSanPham"]."'";
					$QueryData = mysqli_query($conn, $GetProduct);
					$Product = mysqli_fetch_assoc($QueryData);
					$FinalPrice = $Product["DonGia"] * (1-$Product["GiamGia"] /100)*$row["SoLuong"];
					$Total = $Total + $FinalPrice;
					
		?>
			
			var CartImg = <?php echo "'".$Product["Img"]."'"; ?>;
			var CartName = <?php echo "'".$Product["TenSP"]."'"; ?>;
			var CartPrice = <?php echo "'".number_format($Product["DonGia"], $decimals = 0 , $dec_point = "." , $thousands_sep = ".")."'"; ?>;
			var CartDiscount = <?php echo "'".$Product["GiamGia"]."'"; ?>;
			var CartQuantity = <?php echo $row["SoLuong"]; ?>;
			var FinalPrice = <?php echo "'".number_format($FinalPrice, $decimals = 0 , $dec_point = "." , $thousands_sep = ".")."'" ; ?>;
			var IDSanPham = <?php echo "'".$row["IDSanPham"]."'"; ?>;
			_LoadCart(CartImg, CartName, CartPrice, CartDiscount, CartQuantity, FinalPrice, IDSanPham);
		<?php
				}
		?>
			var Total = <?php echo "'".number_format($Total, $decimals = 0 , $dec_point = "." , $thousands_sep = ".")."'"; ?>;
			var _StringTotal = '<div class="cart-total">' + 
       
									'<div class="total-money-in-all">' +
										'<h3>Tổng tiền:</h3>' + 
											'<input type="text" class="total" id="total" readonly value="'+Total+ ' VNĐ">' +
										'<a onclick = "TaoHoaDon()"  class="btn">Mua ngay</a>'+
									'</div>' +
								'</div>';
			document.getElementsByClassName("small-container")[0].innerHTML += _StringTotal;
		<?php
			}
		?>
		
		function TaoHoaDon()
		{
			 $.ajax({
                    url : "./php/AddHoaDon.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         // total : $('#total').val(),
                         
                         
                    },
                    success : function (result){
                        
						document.location.href = "./order.php?idHD=" + result.trim() + "&userid=" + <?php echo "'".$_SESSION['IDTaiKhoan']."'";?>;
						// console.log("./order.php?idHD=" + result.trim() + "&userid=" + <?php echo "'".$_SESSION['IDTaiKhoan']."'";?>);
                    }
                });
		}
		
		function _LoadCart(CartImg, CartName, CartPrice, CartDiscount, CartQuantity, FinalPrice, IDSanPham)
		{
			var _StringHTML = '<div class="cart-product">' +
									'<img src="'+CartImg+'" alt="" class="cart-product-img">'+
									'<div class="cart-product__info">'+
										'<div class="cart-product__header">'+
											'<span class="cart-product__name">'+
												CartName + 
											'</span>'   +
											'<ul class="cart-product__price">'+
												'<li class="cart-product__current" style="text-decoration: line-through;">' + CartPrice + ' VNĐ</li>'+
											'</ul>' +
										'</div>'+

										'<div class="cart-product__center">'+
											'<div class="product__qtn">'+
												'<div class="product__discount">'+
													'Giảm giá: '+
													'<span>'+
														CartDiscount + '%' + 
														
													'</span> '+
												'</div>'+
											  
												'<div class="total-price" style="display: flex;justify-content: space-evenly; width: 180px;">'+
													'<input type="text" class="qtn__current" id="price" readonly value="'+ FinalPrice +' VNĐ">'+
												'</div>' +
											'</div>' +
										'</div>' +
										'<div class="cart-product__footer">' +
											'<div class="product__qtn">' +
												'<div class="product__quantity">' +
													'Số lượng: ' +
													'<span>' + 
														CartQuantity + 
														
													'</span> ' +
												'</div>'+
											'</div>'+
										'</div>'+
									'</div>'+
									'<div class="cart-delete" >'+
										'<i class="cart-delete-icon far fa-trash-alt" id='+ IDSanPham +' onclick = "_delete(\''+ IDSanPham + '\')"></i>'+ 
									'</div>'+
								'</div>';
			document.getElementsByClassName("small-container")[0].innerHTML += _StringHTML;
			
			
		}
		
		
		function _delete(_IDSanPham)
		{
			 $.ajax({
                    url : "./php/DeleteProductFromCart.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         IDSanPham: _IDSanPham,
						 IDTaiKhoan: <?php echo "'".$_SESSION['IDTaiKhoan']."'"; ?>
                         
                         
                    },
                    success : function (result){
                        document.location.href = "./cart.php";
						// console.log(result);
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

    <!-- js plus/min 
    <script>
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");

        var valueCount

        var price = document.getElementById("price").innerText;

        function priceTatol() {
            var total = valueCount * price;
            document.getElementById("price").innerText = total
        }

        //plus button
        document.querySelector(".plus-btn").addEventListener("click", function() {

            valueCount = document.getElementById("quantity").value;

            valueCount++;

            document.getElementById("quantity").value = valueCount

            if(valueCount > 1) {
                document.querySelector(".minus-btn").removeAttribute("disabled");
                document.querySelector(".minus-btn").classList.remove("disabled");
            }

            priceTatol()
        })

        //minus button
        document.querySelector(".minus-btn").addEventListener("click", function() {

            valueCount = document.getElementById("quantity").value;

            valueCount--;

            document.getElementById("quantity").value = valueCount

            if(valueCount == 1) {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
            }

            priceTatol()
        })

    </script>
    -->
    <script>
    
        var gia = 4990000;
        
        var soLuong = 1;
        var total = document.getElementById('total');
        
	    var textTongGia = document.getElementById('price');
	   
	    var textSoLuong = document.getElementById('soluong');
	   
        function Cong() 
		{			   
			   soLuong ++;
			   textSoLuong.value =soLuong.toString();
			   
			   var tongGia = parseInt(soLuong * gia);
			   textTongGia.value = format1(parseInt(tongGia), " VNĐ");			   
			
		        total.value = format1(parseInt(tongGia), " VNĐ");	
		} 
		
		function Tru() 
		{	
		    if(soLuong > 1)
		    {
			   soLuong --;
			   textSoLuong.value = soLuong;
			   
			   
			   var tongGia = parseInt(soLuong * gia);
			   textTongGia.value = format1(parseInt(tongGia), " VNĐ");	
			    total.value = format1(parseInt(tongGia), " VNĐ");	
			}
		} 
		
		
		function format1(n, currency) 
		{
		  return n.toFixed(0).replace(/./g, function(c, i, a) {
			return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "." + c : c;
		  }) + currency;
		}
		
		
    </script>
</body>
</html>