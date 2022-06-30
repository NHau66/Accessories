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
    <title>Accessories - Product Detail</title>
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

    <!-- single product detail -->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="" width="100%" class="small-img">
                    </div>

                    <div class="small-img-col">
                        <img src="" width="100%" class="small-img">
                    </div>

                    <div class="small-img-col">
                        <img src="" width="100%" class="small-img">
                    </div>

                    <div class="small-img-col">
                        <img src="" width="100%" class="small-img">
                    </div>
                </div>
            </div>
			
            <div class="col-2">
                <h1>Tai nghe Bluetooth True Wireless Galaxy Buds Pro</h1>
                <h4 class ="price"> 4.990.000 VNĐ </h4>
                <h5 class ="old-price"> 4.990.000 VNĐ </h5>
                <div class="quantity" style="display: flex; margin-top: 20px;">
                    <button class="minus-btn" type="button" onclick="handleCounterMin()">-</button>
                    <input type="text" id="quantity" class="qtn__number" value="1">
                    <button class="plus-btn" type="button" onclick="handleCounterPlus()">+</button>
                </div>
                <div class = "acc-btn">
					<button class="btn btn-save js-btn-save" onclick = "AddCart()">Thêm vào giỏ</button>
					<!-- modal -->
					<div class="modal js-modal">
						<div class="modal-contain js-modal-contain">
							<img src="./images/right.png" alt="" class="modal-icon">
							<p class="modal-text"></p>
							<a href="" class="agree">Đồng ý</a>
						</div>
					</div>
				</div>
            </div>
        </div>

        <div class="intro">
            <h1 style="margin-bottom: 20px;">Giới thiệu sản phẩm</h1>
            <div class="intro-left" style="display: flex;">
                <div class="intro-spec">
                    <span class="specific">Thông số kỹ thuật</span>
                    <ul class="specific-list">
                        
                           
                        
                    </ul>
                    
                </div>

                <div class="intro-spec">
                    <span class="specific">Đặc điểm nổi bật</span>
                    <ul class="intro-text" style="list-style-type: disc; margin: 5px 0 0 30px;">
                        
                    </ul>
                    
                </div>
            </div>
            
        </div>
    </div>

<!------------------------------------------title-------------------------------------------------------------------------------------------------------------->
<div class="small-container">
    <div class="row row-2">
        <h2>Sản phẩm liên quan khác</h2>
    </div>
</div>





<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------- -->

    <div class="small-container">
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
      
	  <!------------Load sản phẩm liên quan------------>
	  <script>
		
			<?php 
				include("./php/LoadAnotherProduct.php");
				while($row = mysqli_fetch_assoc($sqldata))
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
			function LoadData(id, img, name, OldPrice, FinalPrice)
			{
				var GetContainer = document.getElementsByClassName("small-container")[2];
				var GetRow = GetContainer.getElementsByClassName("row row-start")[0];
				
				
				
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
	  
	  
	   <!-------------thêm vào giỏ hàng------------->
	  <script>
			function AddCart()
			{
				$.ajax({
                    url : "./php/AddCart.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         SoLuong: $("#quantity").val(),
                         IDSanPham : <?php echo "'".$_GET['id']."'"; ?>
                    },
                    success : function (result){
						if (result.trim() == "Need to login")
							document.location.href = "./loginRegister.php";
						else
							$('.modal-text').html(result);
                        
                    }
                });
			}
	  
	  </script>
	  
	  
	  <!---------------------------load thông tin sản phẩm------------------------->
	  <script>
			
			<?php
				include("./php/GetProductDetail.php");
			?>
			document.getElementById("ProductImg").src = <?php echo "'".$Img0."'"   ?>;
			document.getElementsByClassName("small-img")[0].src = <?php echo "'".$Img0."'"   ;?>;
			document.getElementsByClassName("small-img")[1].src = <?php echo "'".$Img1."'"  ; ?>;
			document.getElementsByClassName("small-img")[2].src = <?php echo "'".$Img2."'"  ; ?>;
			document.getElementsByClassName("small-img")[3].src = <?php echo "'".$Img3."'"  ; ?>;
			document.getElementsByClassName("col-2")[1].getElementsByTagName("h1")[0].textContent = <?php echo "'".$Name."'"   ;?>;
			document.getElementsByClassName("col-2")[1].getElementsByTagName("h4")[0].textContent = <?php echo "'".$NewPrice."'"   ;?> + "VNĐ";
			document.getElementsByClassName("col-2")[1].getElementsByTagName("h5")[0].textContent = <?php echo "'".$OldPrice."'"   ;?> + "VNĐ";
			
			<?php
			
				for($i = 0; $i < count($GetThongSoKiThuat); $i++ )
				{
					$ThongSo = $GetThongSoKiThuat[$i];
					$ChiTietThongSo = explode(':', $ThongSo);
			?>		
				
					var key = 		<?php echo "'".$ChiTietThongSo[0].": '";   ?>;
					var value = 	<?php echo "'".$ChiTietThongSo[1]."'";   ?>;
					LoadThongSo(key, value)	
				
			<?php				
				}			
			?>
			
			<?php
			
				for($x = 0; $x < count($GetDacDiem); $x++ )
				{
					$DacDiem = $GetDacDiem[$x];
					
			?>		
				
					var ChiTietDacDiem = 	<?php echo "'".$DacDiem."'";   ?>;
					LoadDacDiem(ChiTietDacDiem)	
				
			<?php
					
				}
				
				
			?>
			
			function LoadDacDiem(ChiTietDacDiem)
			{
				var DacDiem = document.getElementsByClassName("intro-text")[0];
				var Item = document.createElement("li");
				Item.setAttribute("class", "text-line");
				Item.innerText = ChiTietDacDiem;
				DacDiem.appendChild(Item);
				
			}
			
			function LoadThongSo(key, value)
			{
				var ThongSo = document.getElementsByClassName("specific-list")[0];
				var Item = document.createElement("li");
				Item.setAttribute("class", "specific-item");
				ThongSo.appendChild(Item);
				
				var KeyChiTiet = document.createElement("h5");	
				KeyChiTiet.innerText = key
				Item.appendChild(KeyChiTiet);
				
				var ValueChiTiet = document.createElement("span");	
				ValueChiTiet.innerText = value
				Item.appendChild(ValueChiTiet);
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

      <!-- Product-Gallery -->
     <script>
         var ProductImg = document.getElementById("ProductImg");
         var SmallImg = document.getElementsByClassName("small-img");

         SmallImg[0].onclick = function()
         {
             ProductImg.src = SmallImg[0].src;
         }

         SmallImg[1].onclick = function()
         {
             ProductImg.src = SmallImg[1].src;
         }

         SmallImg[2].onclick = function()
         {
             ProductImg.src = SmallImg[2].src;
         }

         SmallImg[3].onclick = function()
         {
             ProductImg.src = SmallImg[3].src;
         }
     </script>

    <!-- js plus/min -->
    <script>
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");

        var valueCount

        //plus button
        document.querySelector(".plus-btn").addEventListener("click", function() {

            valueCount = document.getElementById("quantity").value;

            valueCount++;

            document.getElementById("quantity").value = valueCount

            if(valueCount > 1) {
                document.querySelector(".minus-btn").removeAttribute("disabled");
                document.querySelector(".minus-btn").classList.remove("disabled");
            }

        })

        //minus button
        document.querySelector(".minus-btn").addEventListener("click", function() {

            valueCount = document.getElementById("quantity").value;

            valueCount--;

            document.getElementById("quantity").value = valueCount

            if(valueCount == 1) {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
            }

        })

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