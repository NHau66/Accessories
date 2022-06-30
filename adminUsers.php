
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
    <title>Accessories - Admin Users</title>
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

    <!-- Admin Users -->
    <div class="small-container">
        <div class="contain">
            <div class="theme">Danh sách tài khoản</div>
             <div class="header-new-opt">
                <div class=""></div>
                <!-- sắp xếp sản phẩm theo  -->
                <select id = "roles" onchange = "_ChangeType()">
                    <option >Tất cả</option>
                    <option id="0">User</option>
                    <option id="1">Admiin</option>
                  
                   
                </select>
            </div>
            <div class="row-admin">
                <ul class="pro-list pro-users">
                    <li class="pro-title">
                        <div class="title-name">Họ tên</div>
                        <div class="title-email">Email</div>
                        <!-- <div class="title-tele">Số điện thoại</div> -->
                        <!-- <div class="title-address">Địa chỉ</div> -->
                        <div class="title-role">Vai trò</div>
                        <div class="title-tool">Công cụ</div>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    
    

    <!-- Modal admin sửa -->
    <div class="modalAdd js-modalEdit">
        <div class="modal-line modal-line-m" style = "height: 200px">
            <div class="modalAdd-contain modalAdd-contain-m js-modalEdit-contain" style = "height: 190px">
                <header class="modalAdd-header">Sửa tài khoản</header>
                <ul class="modalAdd-list">
                    <li class="modalAdd-item">
                        <span class="modalAdd-title">Quyền:</span>
                        
						<select class="modalAdd-input" id="user_role">
							<option>User</option>
							<option>Admin</option>
							
						</select>
                    </li>
                   
                </ul>
                <div class="modalAdd-btn">
                    <button onclick="updateRole()" class="btn btn-save js-btn-update">Cập nhật</button>
                    <button class="btn btn-close js-btn-edit-close">Thoát</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal admin sửa -->

    
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
      
	   <!-- Load role user -->
	  
	  <script>
		
		
		function _ChangeType() {
			var selectedValue = document.getElementById("roles").options[document.getElementById("roles").selectedIndex].id;
			
			if (selectedValue !="")
				document.location.href = "./adminUsers.php?roles=" + selectedValue;
			else
				document.location.href = "./adminUsers.php";
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
	  
	  <script>
	  var idTK_Update = "";
	  <?php 
			
			include("./php/LoadUser.php");
			
			while ( $row = mysqli_fetch_array($query) ) 
				{
		?>
					
					var id = <?php echo "'".$row["IDTaiKhoan"]."'"?>;
					var ten = <?php echo "'".$row["HoTen"]."'"?>;
					var email = <?php echo "'".$row["TaiKhoan"]."'"?>;
					var quyen = <?php echo "'".$row["Quyen"]."'"?>;
					var sdt = <?php echo "'".$row["SDT"]."'"?>;
					var diaChi = <?php echo "'".$row["DiaChi"]."'"?>;
					LoadData(id,ten,email,quyen,sdt,diaChi);
						
		<?php 
				}
		?>
		
		//-------------- hàm load sản phẩm---------------------
		
		function LoadData(id,ten,email,quyen,sdt,diachi)
			{
				if(quyen == 0)
				{
					var q = 'User';
				}
				else
				{
					q = 'Admin';
				}
				var item = '<li class="pro-item">'+
							'<div class="item-name"> '+ten+'</div>'+
							'<div class="item-email"> '+email+' </div>'+
							'<div class="item-role"> '+q+' </div>'+
							'<div class="item-tool">'+
							'<button onclick="setID(this.name)" class="btn btn-edit js-btn-edit" name="' +id+ '">Sửa</button>'+
							
							'</div>'+
							'</li>';
									
				document.getElementsByClassName("pro-list pro-users")[0].innerHTML += item;
			}
			
		function setID(IDTaiKhoan)
		{
			idTK_Update = IDTaiKhoan;
			
		}
		
		function updateRole()
		{
			 $.ajax({
                    url : "./php/UpdateRole.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         idTK : idTK_Update,
                         role : user_role.selectedIndex
                         
                    },
                    success : function (result){
						document.getElementsByClassName("modal-text")[0].innerHTML = result;
						
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