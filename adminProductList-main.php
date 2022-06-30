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
    <title>Accessories - Admin Product List</title>
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
                        <li><a href="./loginRegister.php">Đăng xuất</a> </li>
                    </ul>
                </nav>
                <img src="./images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    </div>

    <!-- Header End  -->

    <!-- Admin Product List -->
    <div class="small-container">
        <div class="contain">
            <div class="theme">Danh sách sản phẩm</div>
            <div class="btn btn-new js-btn-new">+ Thêm</div>
            <div class="row-admin">
                <ul class="pro-list">
                    <li class="pro-title">
                        <div class="title-name">Tên sản phẩm</div>
                        <div class="title-image">Ảnh</div>
                        <div class="title-price">Giá</div>
                        <div class="title-reduce">Giảm</div>
                        <div class="title-price_current">Giá bán</div>
                        <div class="title-descript">Mô tả</div>
                        <div class="title-tool">Công cụ</div>
                    </li>
					<!--
                    <li class="pro-item">
                        <div class="item-name">Tai nghe Bluetooth True Wireless Galaxy Buds Pro</div>
                        <div class="item-image">
                            <img src="./images/product-1.jpg" alt="" class="item-img">
                        </div>
                        <div class="item-price">4.990.000 VNĐ</div>
                        <div class="item-reduce">5 %</div>
                        <div class="item-price_current">4.990.000 VNĐ</div>
                        <div class="item-descript">
                            <button class="btn btn-descript js-btn-descript">Mô tả</button>
                        </div>
                        <div class="item-tool">
                            <button class="btn btn-edit js-btn-edit">Sửa</button>
                            <button class="btn btn-delete">Xóa</button>
                        </div>
                    </li>
					-->
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Modal admin mô tả -->
    <div class="modalAdd js-modalDes">
        <div class="modal-line modal-line-l">
            <div class="modalAdd-contain modalAdd-contain-l js-modalDes-contain">
                <div class="modalAdd-intro">
                    <div class="modalAdd-spec" style="border-right: 1px solid #0674ec;">
                        <span class="spec-title">Thông số kỹ thuật</span>
                        <ul class="modalAdd-spec_list">
						<!--
                            <li class="modalAdd-spec_item">
                                <h5>Thời gian sử dụng tai nghe:</h5>
                                <span>Dùng 8 giờ - Sạc 3 giờ</span>
                            </li>
                            <li class="modalAdd-spec_item">
                                <h5>Thời gian sử dụng hộp sạc:</h5>
                                <span>Dùng 20 giờ - Sạc 3 giờ</span>
                            </li>
                            <li class="modalAdd-spec_item">
                                <h5>Cổng sạc:</h5>
                                <span>Type-C</span>
                            </li>
                            <li class="modalAdd-spec_item">
                                <h5>Công nghệ âm thanh:</h5>
                                <span>Active Noise Cancellation</span>
                            </li>
                            <li class="modalAdd-spec_item">
                                <h5>Tương thích:</h5>
                                <ul>
                                    <li>Android</li>
                                    <li>iOS (iPhone)</li>
                                    <li>Windows</li>
                                </ul>
                            </li>
                            <li class="modalAdd-spec_item">
                                <h5>Tiện ích:</h5>
                                <span>Chống nướcChống ồn</span>
                            </li>
                            <li class="modalAdd-spec_item">
                                <h5>Kết nối cùng lúc:</h5>
                                <span>2 thiết bị</span>
                            </li>
                            <li class="modalAdd-spec_item">
                                <h5>Điều khiển:</h5>
                                <span>Cảm ứng chạm</span>
                            </li>
                            <li class="modalAdd-spec_item">
                                <h5>Phím điều khiển:</h5>
                                <ul>
                                    <li>Bật/Tắt Bluetooth</li>
                                    <li>Chuyển bài hát </li>
                                    <li>Nghe/nhận cuộc gọi </li>
                                    <li>Phát/dừng chơi nhạc</li>
                                </ul>
                            </li>
                            <li class="modalAdd-spec_item">
                                <h5>Trọng lượng:</h5>
                                <span>51.2g</span>
                            </li>
                            <li class="modalAdd-spec_item">
                                <h5>Thương hiệu của:</h5>
                                <span>Hàn Quốc</span>
                            </li>
                            <li class="modalAdd-spec_item">
                                <h5>Sản xuất tại:</h5>
                                <span>Việt Nam</span>
                            </li>
                            <li class="modalAdd-spec_item">
                                <h5>Hãng:</h5>
                                <span>Samsung</span>
                            </li>
							-->
                        </ul>
                    </div>
                    <div class="modalAdd-spec">
                        <span class="spec-title">Đặc điểm nổi bật</span>
                        <ul class="modalAdd-spec_list" style="list-style-type: disc; margin: 5px 0 0 30px;">
                            <!--
							<li class="text-line">Nâng tầm trải nghiệm âm và chất lượng cuộc gọi với chống ồn chủ động (ANC).</li>
                            <li class="text-line">Kết nối không dây Bluetooth 5.0 dễ dàng với các thiết bị ngoài, đường truyền ổn định.</li>
                            <li class="text-line">Chuẩn âm thanh studio với loa 2 chiều AKG mạnh mẽ.</li>
                            <li class="text-line">Tận hưởng âm thanh vòm lôi cuốn, chuẩn điện ảnh từ 360 Audio.</li>
                            <li class="text-line">Đàm thoại rõ ràng với hệ thống 3 mic và bộ phận thu nhận giọng nói (Voice Pickup Unit).</li>
                            <li class="text-line">Loa 2 chiều (loa trầm 11mm, loa bổng 6.5mm).</li>
                            <li class="text-line">Khả năng kháng nước hiệu quả cùng xếp hạng kháng nước IPX7.</li>
                            <li class="text-line">Thời gian sử dụng 5 giờ và 13 giờ cùng hộp sạc (bật chống ồn), sử dụng 8 giờ và 20 giờ cùng hộp sạc (tắt chống ồn).</li>
							-->
						</ul>
                    </div>
                </div>
                <div class="modalAdd-btn modalAdd-btn-1">
                    <button class="btn btn-close js-btn-des-close">Thoát</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal admin mô tả  -->

    <!-- Modal admin thêm -->
    <div class="modalAdd js-modalAdd">
        <div class="modal-line">
            <div class="modalAdd-contain js-modalAdd-contain">
                <header class="modalAdd-header">Thêm sản phẩm mới</header>
				<form>
                <div class="divflex" style="display: flex;">
                    <ul class="modalAdd-list">
                        <li class="modalAdd-item">
                            <span class="modalAdd-title">Tên sản phẩm:</span>
                            <input type="text" class="modalAdd-input">
                        </li>
                        <li class="modalAdd-item">
                            <span class="modalAdd-title">Loại:</span>
                            <select class="modalAdd-opt">
                               
                            </select>
                        </li>
                        <li class="modalAdd-item">
                            <span class="modalAdd-title">Ảnh:</span>
                            <div class="input_file">
                                <input type="file" class="modalAdd-input_file">
                                <input type="file" class="modalAdd-input_file">
                                <input type="file" class="modalAdd-input_file">
                                <input type="file" class="modalAdd-input_file">
                            </div>
                        </li>
                        <li class="modalAdd-item">
                            <span class="modalAdd-title">Giá:</span>
                            <input type="text" class="modalAdd-input">
                        </li>
                        <li class="modalAdd-item">
                            <span class="modalAdd-title">Giảm:</span>
                            <input type="text" class="modalAdd-input">
                        </li>
                        <li class="modalAdd-item">
                            <span class="modalAdd-title" >Giá bán:</span>
                            <input type="text" class="modalAdd-input" readonly>
                        </li>
                    </ul>
                    <li class="modalAdd-item modal-desc">
                        <span class="modalAdd-title">Mô tả:</span>
                        <div class="modalAdd-descript">
                            <textarea name="description" class="modalAdd-input-descript" placeholder="Thông số kỹ thuật" cols="30" rows="20"></textarea>
                            <textarea name="description" class="modalAdd-input-descript" placeholder="Đặc điểm nổi bật" cols="30" rows="20"></textarea>
                        </div>
                    </li>

                </div>
                <div class="modalAdd-btn">
                    <button class="btn btn-save js-btn-save">Thêm</button>
                    <button class="btn btn-close js-btn-close">Thoát</button>
                </div>
				</form>
            </div>
        </div>
    </div>
    <!-- Modal admin thêm  -->

    <!-- Modal admin sửa -->
    <div class="modalAdd js-modalEdit">
        <div class="modal-line">
            <div class="modalAdd-contain js-modalEdit-contain">
                <header class="modalAdd-header">Sửa sản phẩm</header>
                <div class="divflex" style="display: flex;">
                    <ul class="modalAdd-list">
                        <li class="modalAdd-item">
                            <span class="modalAdd-title">Tên sản phẩm:</span>
                            <input type="text" class="modalAdd-input">
                        </li>
                        <li class="modalAdd-item">
                            <span class="modalAdd-title">Loại:</span>
                            <select class="modalAdd-opt">
                               
                            </select>
                        </li>
                        <li class="modalAdd-item">
                            <span class="modalAdd-title">Ảnh:</span>
                            <div class="input_file">
                                <input type="file" class="modalAdd-input_file" name="image">
                                <input type="file" class="modalAdd-input_file" name="image">
                                <input type="file" class="modalAdd-input_file" name="image">
                                <input type="file" class="modalAdd-input_file" name="image">
                            </div>
                        </li>
                        <li class="modalAdd-item">
                            <span class="modalAdd-title">Giá:</span>
                            <input type="text" class="modalAdd-input">
                        </li>
                        <li class="modalAdd-item">
                            <span class="modalAdd-title">Giảm:</span>
                            <input type="text" class="modalAdd-input">
                        </li>
                        <li class="modalAdd-item">
                            <span class="modalAdd-title" >Giá bán:</span>
                            <input type="text" class="modalAdd-input" readonly>
                        </li>
                    </ul>
                    <li class="modalAdd-item modal-desc">
                        <span class="modalAdd-title">Mô tả:</span>
                        <div class="modalAdd-descript">
                            <textarea name="description" class="modalAdd-input-descript" placeholder="Thông số kỹ thuật" cols="30" rows="20"></textarea>
                            <textarea name="description" class="modalAdd-input-descript" placeholder="Đặc điểm nổi bật" cols="30" rows="20"></textarea>
                        </div>
                    </li>

                </div>
                
                <div class="modalAdd-btn">
                    <button onclick="UpdateProduct(this.name)" class="btn btn-save js-btn-update">Cập nhật</button>
                    <button class="btn btn-close js-btn-edit-close">Thoát</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal admin sửa -->

    <!-- modal thành công -->
    <div class="modal js-modal">
        <div class="modal-contain js-modal-contain">
            <img src="./images/right.png" alt="" class="modal-icon">
            <p class="modal-text">Thêm thành công!!</p>
            <a href="" class="agree">Đồng ý</a>
        </div>
    </div>
    <!-- modal -->

    <!-- modal thành công update -->
    <div class="modal js-modal-update">
        <div class="modal-contain js-modal-update-contain">
            <img src="./images/right.png" alt="" class="modal-icon">
            <p class="modal-text">Cập nhật thành công!!</p>
            <a href="" class="agree">Đồng ý</a>
        </div>
    </div>
    <!-- modal -->

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
	
      <!------ thêm sản phẩm ------------->
	  <script>
			function AddProduct()
			{
	  
	  
			}
	  </script>
	  
	  <!------ cập nhật sản phẩm ------------->
	  
	  <script>
			function UpdateProduct(idSP)
			{
				var tenSP = document.getElementsByClassName("modalAdd-input")[4].value;
				var gia = document.getElementsByClassName("modalAdd-input")[5].value;
				var GiamGia = document.getElementsByClassName("modalAdd-input")[6].value ;
				
				var LoaiSP = document.getElementsByClassName("modalAdd-opt")[1].selectedOptions[0].className;		
				
				var ThongSoKiThuat = document.getElementsByClassName("modalAdd-input-descript")[2].value;
				var DacDiemNoiBat = document.getElementsByClassName("modalAdd-input-descript")[3].value;
				
				if (tenSP == "")
					tenSP = "no";
				
				if (gia == "")
					gia = "no";
				
				if (GiamGia == "")
					GiamGia = "no";
				
				if (ThongSoKiThuat == "")
					ThongSoKiThuat = "Thông số:Đang cập nhật";
				
				if (DacDiemNoiBat == "")
					DacDiemNoiBat = "Đặc điểm: Đang cập nhật";
				
				$.ajax({
                    url : "./php/UpdateProduct.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         idProduct_Edit : idSP,
                         tenSP : tenSP,
                         gia : gia,
                         GiamGia : GiamGia,
                         LoaiSP : LoaiSP,
                         ThongSoKiThuat : ThongSoKiThuat,
                         DacDiemNoiBat : DacDiemNoiBat,
						 img1: document.getElementsByClassName("modalAdd-input_file")[4].value
                         
                    },
                    success : function (result){
						// document.getElementsByClassName('modal-text')[1].innerHTML = result;
						console.log(result);
						
                    }
                });
				
			}
	  
	  
	  </script>
	  
	  
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
			document.getElementsByClassName("modalAdd-opt")[0].innerHTML += '<option class='+IDLoai +'>'+ TenLoai + '</option>';
			document.getElementsByClassName("modalAdd-opt")[1].innerHTML += '<option class='+IDLoai +'>'+ TenLoai + '</option>';
																		
		}
		
	</script>
	  
	  
	  
	  <!-- Load Data product -->
	  
	  <script>
		
			
		<?php 
			include("./php/GetProductDetail.php");
			
			while ( $row = mysqli_fetch_array($sqldata) ) 
				{
					$Img = $row['HinhAnh'];
				
					$GetLinkImg = explode(',', $Img);
					$Img0 = $GetLinkImg[0];
					$OldPrice = number_format($row["DonGia"], $decimals = 0 , $dec_point = "." , $thousands_sep = ".");
					$NewPrice = number_format($row["DonGia"] * (1-$row["GiamGia"] /100), $decimals = 0 , $dec_point = "." , $thousands_sep = ".");
					
					
					$FinalPrice = $row["DonGia"] * (1-$row["GiamGia"] /100);
		?>
				var id = <?php echo "'".$row["IDSanPham"]."'"?>;
				var img = <?php echo "'".$Img0."'"?>;
				var name = <?php echo "'".$row["TenSP"]."'"?>;
				var giamGia = <?php echo "'".$row["GiamGia"]."'"?>;
				var OldPrice = <?php echo "'".number_format($row["DonGia"], $decimals = 0 , $dec_point = "." , $thousands_sep = ".")."'"?>;
				var FinalPrice = <?php echo "'".number_format($FinalPrice, $decimals = 0 , $dec_point = "." , $thousands_sep = ".")."'"?>;
				LoadData(id, img, name, OldPrice, FinalPrice,giamGia)
			
		<?php 
				}
			
		?>
		
		//-------------- hàm load sản phẩm---------------------
		
		function LoadData(id, img, name, OldPrice, FinalPrice,giamGia)
			{
				var item =  '<li class="pro-item">'+
							'<div class="item-name">'+name+'</div>'+
							
							'<div class="item-image">'+
							'<img src="'+img+'" alt="" class="item-img">'+
							'</div>'+
							'<div class="item-price">'+OldPrice+' VNĐ</div>'+
							'<div class="item-reduce">'+giamGia+' %</div>'+
							'<div class="item-price_current">'+FinalPrice+' VNĐ</div>'+
							'<div class="item-descript">'+
							'<button onclick="GetMoTa(this.name)" class="btn btn-descript js-btn-descript" name="'+id+'">Mô tả</button>'+
							'</div>'+
							'<div class="item-tool">'+
							// '<button class="btn btn-edit js-btn-edit '+id+'">Sửa</button>'+
							
							// Dòng mới
							'<button class="btn btn-edit js-btn-edit" name ="'+ id + '"onclick="GetDataToEdit(this.name)">Sửa</button>'+
							
							'<button onclick="" class="btn btn-delete" name="'+id+'">Xóa</button>'+
							'</div>'+
							'</li>';
									
				document.getElementsByClassName("pro-list")[0].innerHTML += item;
			
			}
			
		var getID = "";
		
		function GetDataToEdit(idSP)
		{
			
			$.ajax({
                    url : "./php/GetProductDetail.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         idProduct_Edit : idSP
                         
                    },
                    success : function (result){
						
						document.getElementsByClassName("modalAdd-input")[4].value = "";
						document.getElementsByClassName("modalAdd-input")[5].value = "";
						document.getElementsByClassName("modalAdd-input")[6].value = "";
						document.getElementsByClassName("modalAdd-input")[7].value = "";
						
						document.getElementsByClassName("modalAdd-input-descript")[2].value="";
						document.getElementsByClassName("modalAdd-input-descript")[3].value="";
						
						
						console.log(result);
                        var _GetData = result.trim().split("#");
						
						document.getElementsByClassName("modalAdd-input")[4].value = _GetData[0];
						document.getElementsByClassName("modalAdd-input")[5].value = _GetData[1];
						document.getElementsByClassName("modalAdd-input")[6].value = _GetData[2];
						document.getElementsByClassName("modalAdd-input")[7].value = _GetData[1]*(1-_GetData[2]/100);
						
						document.getElementsByClassName("modalAdd-input-descript")[2].value= _GetData[4];
						document.getElementsByClassName("modalAdd-input-descript")[3].value= _GetData[5];
						
						document.getElementsByClassName(_GetData[6])[1].selected="select";
						
						var UpdateButton = document.getElementsByClassName('btn btn-save js-btn-update')[0];
						UpdateButton.setAttribute("name", _GetData[7]);
						
                    }
                });
			
		}
		
		
		function GetMoTa(idSP)
		{
			document.getElementsByClassName("modalAdd-spec_list")[0].innerHTML="";
			document.getElementsByClassName("modalAdd-spec_list")[1].innerHTML="";
			getID = idSP;
			
			$.ajax({
                    url : "./php/GetProductDetail.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         idProduct_GetDetails : getID
                         
                    },
                    success : function (result){
						console.log(result);
                        var _GetData = result.trim().split("||");
						
						var GetChiTietThongSo = _GetData[0].split(",");
						for(var i= 0; i < GetChiTietThongSo.length; i++)
						{
							// console.log(GetChiTietThongSo[i]);
							var ChiTietThongSo = GetChiTietThongSo[i].split(":");
							var key = ChiTietThongSo[0]+ ":";
							var value =ChiTietThongSo[1];
							LoadThongSo(key,value);
						}
						
						var GetChiTietDacDiem  = _GetData[1].split(".");
						for(var i= 0; i < GetChiTietDacDiem.length; i++)
						{
							
							var ChiTietDacDiem = GetChiTietDacDiem[i];
							console.log(ChiTietDacDiem);
							LoadDacDiem(ChiTietDacDiem);
						}
						
                    }
                });
		}
		
		function LoadThongSo(key, value)
			{
				var ThongSo = document.getElementsByClassName("modalAdd-spec_list")[0];
				var Item = document.createElement("li");
				Item.setAttribute("class", "modalAdd-spec_item");
				ThongSo.appendChild(Item);
				
				var KeyChiTiet = document.createElement("h5");	
				KeyChiTiet.innerText = key
				Item.appendChild(KeyChiTiet);
				
				var ValueChiTiet = document.createElement("span");	
				ValueChiTiet.innerText = value
				Item.appendChild(ValueChiTiet);
			}
			
		function LoadDacDiem(ChiTietDacDiem)
			{
				var DacDiem = document.getElementsByClassName("modalAdd-spec_list")[1];
				var Item = document.createElement("li");
				Item.setAttribute("class", "text-line");
				Item.innerText = ChiTietDacDiem;
				DacDiem.appendChild(Item);
				
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

    <!-- js modal add -->
    <script>
        const addBtns = document.querySelectorAll('.js-btn-new')
        const modalAdd = document.querySelector('.js-modalAdd')
        const modalAddContain = document.querySelector('.js-modalAdd-contain')
        const modalAddClose = document.querySelector('.js-btn-close')

        function showAdd() {
            modalAdd.classList.add('open')
        }

        function hideAdd() {
            modalAdd.classList.remove('open')
        }

        for (const addBtn of addBtns) {
            addBtn.addEventListener('click', showAdd)
        }

        modalAdd.addEventListener('click',hideAdd)
        modalAddClose.addEventListener('click',hideAdd)

        modalAddContain.addEventListener('click',function (event) {
            event.stopPropagation()
        })
    </script>

    <!-- js modal edit -->
    <script>
        const editBtns = document.querySelectorAll('.js-btn-edit')
        const modalEdit = document.querySelector('.js-modalEdit')
        const modalEditContain = document.querySelector('.js-modalEdit-contain')
        const modalEditClose = document.querySelector('.js-btn-edit-close')

        function showAdd() {
            modalEdit.classList.add('open')
        }

        function hideAdd() {
            modalEdit.classList.remove('open')
        }

        for (const editBtn of editBtns) {
            editBtn.addEventListener('click', showAdd)
        }

        modalEdit.addEventListener('click',hideAdd)
        modalEditClose.addEventListener('click',hideAdd)

        modalEditContain.addEventListener('click',function (event) {
            event.stopPropagation()
        })
    </script>

    <!-- js modal mô tả -->
    <script>
        const desBtns = document.querySelectorAll('.js-btn-descript')
        const modalDes = document.querySelector('.js-modalDes')
        const modalDesContain = document.querySelector('.js-modalDes-contain')
        const modalDesClose = document.querySelector('.js-btn-des-close')

        function showDes() {
            modalDes.classList.add('open')
        }

        function hideDes() {
            modalDes.classList.remove('open')
        }

        for (const desBtn of desBtns) {
            desBtn.addEventListener('click', showDes)
        }

        modalDes.addEventListener('click',hideDes)
        modalDesClose.addEventListener('click',hideDes)

        modalDesContain.addEventListener('click',function (event) {
            event.stopPropagation()
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

    <!-- js modal update -->
    <script>
        const updateBtns = document.querySelectorAll('.js-btn-update')
        const modalUpdate = document.querySelector('.js-modal-update')
        const modalUpdateContain = document.querySelector('.js-modal-update-contain')

        function showUpdate() {
            modalUpdate.classList.add('open')
        }

        function hideUpdate() {
            modalUpdate.classList.remove('open')
        }

        for (const updateBtn of updateBtns) {
            updateBtn.addEventListener('click', showUpdate)
        }

        modalUpdate.addEventListener('click', hideUpdate)

        modalUpdateContain.addEventListener('click',function (event) {
            event.stopPropagation()
        })
    </script>
</body>
</html>