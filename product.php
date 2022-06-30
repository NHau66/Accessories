
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
    <title>Accessories - Product</title>
    <link rel="icon" href="./images/logoweb.png" type="image/x-icon" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style2.css">

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

    <div class="small-container" style='min-height: 450px;'>
        <!-- sắp xếp sản phẩm theo  -->
        <div class="row row-2">
            <h2>Tất cả sản phẩm</h2>
            <select id= "product_type" onChange = "_ChangeType();">
                <option>Tất cả sản phẩm</option>
                
            </select>
        </div>

        <div class="row row-start">
            
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
      
	  
	
	  
	  
	  <!-- load loại sản phẩm -->
	  <script>
		<?php 
			include("./php/LoadProductType.php");
			$i = 0;
			while ( $row = mysqli_fetch_array($query) ) {
				
		?>
			var IDLoai = <?php echo "'".$row["IDLoai"]."'";?>;
			var TenLoai = <?php echo "'".$row["TenLoai"]."'";?>;
			_loadType(IDLoai,TenLoai);
	  
		<?php
		
			}
		?>
	  
		function _loadType(IDLoai,TenLoai)
		{
			document.getElementById("product_type").innerHTML += '<option id='+IDLoai +'>'+ TenLoai + '</option>';
																		
		}
		
		function _ChangeType() {
			var selectedValue = product_type.options[product_type.selectedIndex].id;
			
			if (selectedValue !="")
				document.location.href = "./product.php?loai=" + selectedValue;
			else
				document.location.href = "./product.php";
		}
		
		var Loai = <?php 
						
						if (isset($_GET["loai"]))
							echo  "'".$_GET["loai"]."'" ; 
						else
							echo '""';
						
					?>;
		if (Loai != "")
			document.getElementById(Loai).selected="select";
		
		
		
	  </script>
	  
	  
     
      <script>
	
		<?php 
			include("./php/Getproduct.php");
			$i = 0;
			while ( $row = mysqli_fetch_array($sqldata) ) 
				{
					$FinalPrice = $row["DonGia"] * (1-$row["GiamGia"] /100);
					
				
		?>
				var id = <?php echo "'".$row["IDSanPham"]."'"?>;
				var img = <?php echo "'".$row["Img"]."'"?>;
				var name = <?php echo "'".$row["TenSP"]."'"?>;
				var OldPrice = <?php echo "'".number_format($row["DonGia"], $decimals = 0 , $dec_point = "." , $thousands_sep = ".")."'"?>;
				var FinalPrice = <?php echo "'".number_format($FinalPrice, $decimals = 0 , $dec_point = "." , $thousands_sep = ".")."'"?>;
				LoadData(id, img, name, OldPrice, FinalPrice)
			
			
			<?php 
				}
				
			?>
		
		//-------------- hàm load sản phẩm---------------------
		
		function LoadData(id, img, name, OldPrice, FinalPrice)
			{
				var GetContainer = document.getElementsByClassName("small-container")[0];
				var GetRow = GetContainer.getElementsByClassName("row")[1];
				
				
				
					var NewCol = document.createElement("div")
					NewCol.setAttribute("class", "col-4");
					GetRow.appendChild(NewCol);
					

					var NewHref = document.createElement("a")				
					NewHref.setAttribute("href", "./product-detail.php?id=" + id)
					NewHref.setAttribute("class", "product__detail")	
					NewCol.appendChild(NewHref);
					
					var Info1 = document.createElement("img")
					var GetImg = img
					Info1.setAttribute("src", GetImg)
					Info1.setAttribute("alt","")	
					NewHref.appendChild(Info1);
					
					var Info2 = document.createElement("h4")
					Info2.innerText = name
					NewHref.appendChild(Info2);
					
					var Info3 = document.createElement("div")
					Info3.setAttribute("class", "price")
					Info3.textContent = FinalPrice + " VNĐ";
					NewHref.appendChild(Info3);
					
					var Info4 = document.createElement("div")
					Info4.setAttribute("class", "old-price")
					Info4.textContent = OldPrice + " VNĐ";
					NewHref.appendChild(Info4);
			
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
</body>
</html>