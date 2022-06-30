
<?php
	
	include("./php/CheckSession.php");
	if ($role == 0)
		header("location: ./product.php");
	else if ($role == "not")
	{
		header("location: ./loginRegister.php");
		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories - Admin Orders</title>
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
                    <a href="./index.php" class="logo"><span>A</span>ccessories</a>
                </div>
    
            <!-- Thanh công cụ -->
                 <nav>
                    <ul id="MenuItems">
                        <li><a href="./adminOrders.php">Đơn hàng</a> </li>
                        <li><a href="./adminUsers.php">Người dùng</a> </li>
                        <li><a href="./adminProductList.php">Danh sách sản phẩm</a> </li>
                        <li><a href="./adminCategory.php">Loại</a> </li>
                        <li><a onclick = "logout()" class="btn btn-logout">Đăng xuất</a> </li>
                    </ul>
                </nav>
                <img src="./images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    </div>

    <!-- Header End  -->

    <!-- Admin Orders -->
    <div class="small-container">
        <div class="contain">
            <div class="theme">Đơn hàng</div>
			<div class="header-new-opt opt-end">
                <!-- sắp xếp sản phẩm theo  -->
                <select id = "stats" onchange = "_ChangeType()">
                    <option >Tất cả</option>
                    <option id="Paid">Đã thanh toán</option>
                    <option id="Cancel">Đã hủy</option>
                    <option id="pending">Đang chờ thanh toán</option>
                   
                </select>
            </div>
            <div class="row-admin">
                <ul class="pro-list">
                    <li class="pro-title">
                        <div class="title-buyerName">Tên người đặt hàng</div>
                        <div class="title-date">Thanh toán</div>
                        <div class="title-address">Địa chỉ giao hàng</div>
                        <div class="title-total">Tổng tiền</div>
                        <div class="title-status">Trạng thái</div>
                        <div class="title-status">Số điện thoại</div>
                        <div class="title-details">Chi tiết</div>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Modal admin chi tiết -->
    <div class="modalAdd js-modalDet">
        <div class="modal-line modal-line-m-2">
            <div class="modalAdd-contain modalAdd-contain-m-2 js-modalDet-contain">
                <header class="modalAdd-header">Chi tiết đơn hàng</header>
                <div class="det-ul-pad">
                    <ul class="det-list">
                        <li class="det-title">
                            <div class="det-title-name">Tên sản phẩm</div>
                            <div class="det-title-price">Giá</div>
                            <div class="det-title-quantity">Số lượng</div>
                            <div class="det-title-money">Thành tiền</div>
                        </li>
                        <!-- product order 
                        <li class="det-item">
                            <div class="det-item-name">Tai nghe Bluetooth True Wireless Galaxy Buds Pro</div>
                            <div class="det-item-price">4.990.000 VNĐ</div>
                            <div class="det-item-quantity">1</div>
                            <div class="det-item-money">4.990.000 VNĐ</div>
                        </li>-->
                        <!-- product order 
                        <li class="det-total">
                            <div class="det-total-text">Tổng cộng</div>
                            <div class="det-total-money">4.990.000 VNĐ</div>
                        </li>-->
                    </ul>
                </div>
                <div class="modalAdd-btn modalAdd-btn-1">
                    <button class="btn btn-close js-btn-close">Thoát</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal admin chi tiết  -->

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
      
	   <!-- Load stats Bill -->
	  
	  <script>
		
		
		function _ChangeType() {
			var selectedValue = document.getElementById("stats").options[document.getElementById("stats").selectedIndex].id;
			
			if (selectedValue !="")
				document.location.href = "./adminOrders.php?stats=" + selectedValue;
			else
				document.location.href = "./adminOrders.php";
		}
		
		var Stats = <?php 
						
						if (isset($_GET["stats"]))
							echo  "'".$_GET["stats"]."'" ; 
						else
							echo '""';
						
					?>;
		if (Stats != "")
			document.getElementById(Stats).selected="select";
		
	  
	  
	  </script>
	  
	  <!-- Load Data Bill -->
	  
	  <script>
		<?php 
			
			include("./php/LoadHoaDon.php");
			
			while ( $row = mysqli_fetch_array($query) ) 
				{
					$TongTien = $row["TongTien"];
					$Total = number_format($TongTien,$decimals = 0 , $dec_point = "." , $thousands_sep = ".");
		?>
					
					var id = <?php echo "'".$row["IDHoaDon"]."'"?>;
					var ten = <?php echo "'".$row["HoTen"]."'"?>;
					var diaChi = <?php echo "'".$row["DiaChiNhan"]."'"?>;
					var phuongThucThanhToan = <?php echo "'".$row["PhuongThucThanhToan"]."'"?>;
					var tongTien = <?php echo "'".$Total."'"?>;
					var trangThai = <?php echo "'".$row["TrangThai"]."'"?>;
					var sdt = <?php echo "'".$row["SDT"]."'"?>;
					
					LoadData(id,ten,diaChi,phuongThucThanhToan,tongTien,trangThai,sdt);
						
		<?php 
				}
		?>
		
		
		//-------------- hàm load đơn hàng---------------------
		
		function LoadData(id,ten,diachi,phuongThucThanhToan,tongTien,trangThai,sdt)
			{
				if(diaChi != '')
				{
					var _DiaChi = diachi;
					var SplitDiaChi = _DiaChi.split("|");
					var dc = '';
					
					for(var i = SplitDiaChi.length -1; i>= 0; i--)
					{
						if(i == 0)
							dc += SplitDiaChi[i];
						else if( i == SplitDiaChi.length -1)
							dc += SplitDiaChi[i] ;
						else
							dc += SplitDiaChi[i]+', ';
					}
					
				}
				else
				{
					dc = '';
				}
				var item = '<li class="pro-item">'+
                        '<div class="item-buyerName">'+ten+'</div>'+
                        '<div class="item-date">'+phuongThucThanhToan+'</div>'+
						
                        '<div class="item-address">'+dc+'</div>'+
						
                        '<div class="item-total">'+tongTien+' VNĐ</div>'+
                        '<div class="item-status">'+trangThai+'</div>'+
                        '<div class="item-status">'+sdt+'</div>'+
                        '<div class="item-details">'+
                        '<button onclick="LoadBillDetail(this.name)" class="btn btn-details js-btn-details" name= '+id+'>Chi tiết</button>'+
                        '</div>'+
						'</li>';
									
				document.getElementsByClassName("pro-list")[0].innerHTML += item;
			}
			
			// -------------- load chi tiết đơn hàng------------------
			var idHD = "";
			function LoadBillDetail(id)
			{
				$.ajax({
                    url : "./php/LoadChiTietHoaDon.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         idHD : id.trim()
                         
                    },
                    success : function (result){
						document.getElementsByClassName("det-list")[0].innerHTML = '<li class="det-title">'+
																					'<div class="det-title-name">Tên sản phẩm</div>'+
																					'<div class="det-title-price">Giá</div>'+
																					'<div class="det-title-quantity">Số lượng</div>'+
																					'<div class="det-title-money">Thành tiền</div>'+
																				'</li>'
						// console.log(result.trim());
						
                        var _GetData = result.trim().split("||");
                        var TongTienHD = 0;
						
						for(var i= 0; i < _GetData.length; i++)
						{
							if (_GetData[i] != "")
							{
								var _GetData2 = _GetData[i].trim().split(",");
								console.log(_GetData2.length);
								
								var tenSP = _GetData2[7];
								var GiaTien = _GetData2[3];
								
								var SoLuong = _GetData2[5];
								var TongTienSP = _GetData2[4];
								
								TongTienHD = _GetData2[2];
								var _html = '<li class="det-item">'+
											'<div class="det-item-name">'+tenSP+'</div>'+
											'<div class="det-item-price">'+GiaTien+' VNĐ</div>'+
											'<div class="det-item-quantity">'+SoLuong+'</div>'+
											'<div class="det-item-money">'+TongTienSP+' VNĐ</div>'+
											'</li>'
											
								document.getElementsByClassName("det-list")[0].innerHTML +=_html;
							
							}
						}
						
						
							document.getElementsByClassName("det-list")[0].innerHTML += '<li class="det-total">'+
																						'<div class="det-total-text">Tổng cộng</div>'+
																						'<div class="det-total-money">'+TongTienHD+' VNĐ</div>'+
																					'</li>'
							
                    }
                });
			}
	  </script>
	  
	  <script>
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

    <!-- js modal chi tiết -->
    <script>
        const detBtns = document.querySelectorAll('.js-btn-details')
        const modalDet = document.querySelector('.js-modalDet')
        const modalDetContain = document.querySelector('.js-modalDet-contain')
        const modalDetClose = document.querySelector('.js-btn-close')

        function showDet() {
            modalDet.classList.add('open')
        }

        function hideDet() {
            modalDet.classList.remove('open')
        }

        for (const detBtn of detBtns) {
            detBtn.addEventListener('click', showDet)
        }

        modalDet.addEventListener('click',hideDet)
        modalDetClose.addEventListener('click',hideDet)

        modalDetContain.addEventListener('click',function (event) {
            event.stopPropagation()
        })
    </script>
</body>
</html>