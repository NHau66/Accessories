<?php
	
	include("./php/CheckSession.php");
	if ($role == 0)
		header("location: http://localhost/temp/product.php");
	else if ($role == "not")
	{
		header("location: http://localhost/temp/loginRegister.php");
		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories - Admin Category</title>
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

    <!-- Admin Category -->
    <div class="small-container">
        <div class="contain">
            <div class="theme">Loại</div>
            <div class="btn btn-new js-btn-new">+ Thêm</div>
            <div class="row-admin">
                <ul class="pro-list pro-cate">
                    <li class="pro-title">
                        <div class="title-name">Loại sản phẩm</div>
                        <div class="title-tool">Công cụ</div>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Modal admin thêm -->
    <div class="modalAdd js-modalAdd">
        <div class="modal-line modal-line-s">
            <div class="modalAdd-contain modalAdd-contain-s js-modalAdd-contain">
                <header class="modalAdd-header">Thêm loại</header>
                <ul class="modalAdd-list">
                    <li class="modalAdd-item">
                        <span class="modalAdd-title">Tên loại:</span>
                        <input type="text" class="modalAdd-input">
                    </li>
                </ul>
                <div class="modalAdd-btn">
                    <button class="btn btn-save js-btn-save" onclick="AddType()">Thêm</button>
                    <button class="btn btn-close js-btn-close">Thoát</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal admin thêm  -->

    <!-- Modal admin sửa -->
    <div class="modalAdd js-modalEdit">
        <div class="modal-line modal-line-s">
            <div class="modalAdd-contain modalAdd-contain-s js-modalEdit-contain">
                <header class="modalAdd-header">Sửa loại</header>
                <ul class="modalAdd-list">
                    <li class="modalAdd-item">
                        <span class="modalAdd-title">Tên loại:</span>
                        <input type="text" class="modalAdd-input">
                    </li>
                </ul>
                <div class="modalAdd-btn">
                    <button class="btn btn-save js-btn-update" onclick="Edit()">Cập nhật</button>
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
      
	  <!-- DATA--------------------------------------------------------------------------------------------- -->
	  
	<script>
		<?php 
			include("./php/LoadProductType.php");
			$i = 0;
			while ( $row = mysqli_fetch_array($query) ) 
				{
		?>
				var tenLoai = <?php echo "'".$row["TenLoai"]."'"?>;
				var id = <?php echo "'".$row["IDLoai"]."'"?>;
				LoadData(id,tenLoai);
			
			
			<?php 
				}
				
			?>
		
		//-------------- hàm load sản phẩm---------------------
		
		function LoadData(id,tenLoai)
			{
				var item = '<li class="pro-item pro-item_line">'+
									'<div class="item-name">'+tenLoai+'</div>'+
									'<div class="item-tool">'+
									'<button class="btn btn-edit js-btn-edit"' + 'name ="' + id + '"' +' onclick="SetID(this.name)" >Sửa</button>'+ 
									// '<button class="btn btn-edit js-btn-edit">Sửa</button>'+ 
									'<button class="btn btn-delete" ' + 'name ="' + id + '"' +' onclick ="Delete(this.name)" >Xóa</button>'+
									'</div>'+
									'</li>';
									
				document.getElementsByClassName("pro-list pro-cate")[0].innerHTML += item;
			}
			
			
			function AddType()
			{
				var ten = document.getElementsByClassName("modalAdd-input")[0].value;
				$.ajax({
							url : "./php/NewType.php",
							type : "post",
							dataType:"text",
							data : {
								 tenLoai : ten
								 
							},
							success : function (result)
							{
								
								document.getElementsByClassName("modal-text")[0].innerHTML = result;
								// document.location.href="./adminCategory.php";
							}
						});
						
			}
			
			var idLoaiUpdate; 
			function SetID(name)
			{
				idLoaiUpdate = name;
			}
			
			function Delete(idLoaiDelete)
			{
				
				 $.ajax({
							url : "./php/DeleteType.php",
							type : "post",
							dataType:"text",
							data : {
								 idLoai : idLoaiDelete
								 
							},
							success : function (result)
							{
								document.location.href="./adminCategory.php";
							}
						});
						
			}
			
			function Edit()
			{
				// alert(_nameButton);
				var dataUpdate =  document.getElementsByClassName("modalAdd-input")[1].value;
				
				var _nameButton = idLoaiUpdate;
				
				 $.ajax({
							url : "./php/UpdateType.php",
							type : "post",
							dataType:"text",
							data : {
								 idLoai : _nameButton,
								 dataUpdate : dataUpdate
								 
							},
							success : function (result)
							{
								document.getElementsByClassName("modal-text")[1].innerHTML = result;
								// alert(result);
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