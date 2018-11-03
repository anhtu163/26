<!DOCTYPE html>
<html>
	<header>
		<title>Kho EBook</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css" />
		</style>
	</header>
	<body>
	<div id="wrapper">
		<!--<script>
			alert("Chào mừng bạn đến với trang web Quản Lý Thư Viện");
		</script>-->
		<div id="menu-top">
		<div id="top-content">
			<div id="logo">
				<a href="index.html"><img src="/26/logo.jpg" width="100" height="100"></a>				
			</div>
			<pre><br><br><br><br></pre>
			<div class="tab-menu">
				<ul id="main-menu">           
					<li><a href="/26">Trang Chủ</a></li>
					<li><a href="/26/ThongTin.php">Thông Tin</a></li>
					<li><a href="/26/Ebook.php">Ebook</a></li>
					<li><a href="/26/QA.php">Q/A</a></li>
				</ul>
			</div>
			<div id="top-line"></div>
		</div>
		</div>
		<pre><br></pre>
		<ul>
				<li><pre>               
			     </pre></li>
				<li>
					<fieldset class="group-search" background = >
						<legend class="legend">Tìm Kiếm</legend>
						<form id="form-search" name="formSearch" method="get" align="right-side" onSubmit="return(onFormSearch());">
							<table cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td align="right">Tên Sách</td>
										<td width="20"></td>
										<td align="left">
											<input type="text" placeholder="Tên Sách" id="tensach" value>
										</td>
									</tr>
									<tr>
										<td align="right">Thể Loại</td>
										<td width="20"></td>
										<td align="left">
											<select name="s_theloai_id" id="s_theloai_id" onChange="s_category_parent_change(this)">
												<option value="0" selected="selected">-- Tất cả --</option>							<option value="1">Phát triển bản thân</option>										<option value="2">Khởi nghiệp</option>										
												<option value="3">Nghiên cứu khoa học</option>										<option value="4">Toán thế giới</option>								
											</select>		
										</td>
									</tr>									
									<tr>
										<td align="right">Năm Xuất Bản</td>
										<td width="20"></td>
										<td align="left">
											<input type="text"  placeholder="Năm Xuất Bản" id="namxuatban" value>
										</td>
									</tr>
									<td colspan="3" style="padding:0px;" align="right">
									<input type="submit" name="search" value="TÌM SÁCH" class="button">
									</td>
								</tbody>
							</table>
						</form>
					</fieldset>
				</li>
				<script src="KiemTraTimSach.js"></script>
				<li class="header-line"></li>
				<li>
					<ul>
					</ul>
				</li>
				<li class="header-line"></li>
				<li>
					<fieldset class="group-login">
						<legend class="legend">Đăng nhập</legend>
						<form id="form-login" name="formLogin" method="get" align="right-side">
							<table cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td align="right">Username</td>
										<td width="20"></td>
										<td align="left">
											<input type="text" placeholder="Tên Đăng Nhập" id="user" value style="width: 218px">
										</td>
									</tr>
									<tr>
										<td align="right">Password</td>
										<td width="20"></td>
										<td align="left">
											<input type="text"  placeholder="Mật khẩu" id="pass" value style="width: 218px">
										</td>
									</tr>
									<tr>
										<td align="right">        </td>
										<td width="20"></td>
										<td align="left">											
											<button type ="submit" class="button">Đăng Nhập</button>				
											<a type="button" href="/26/DangKy.php">Đăng Ký Tài Khoản</a>
										</td>
									</tr>					
								</tbody>
							</table>
						</form>
					</fieldset>
				</li>				
				<script src="KiemTraDangNhap.js"></script>	
			</ul>			
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		 	<ul>
				<div id = "menu-top">
					<div id = "top-content" >
						<div id="top-line"></div>
					</div>
				</div>
			</ul>
		</div>
	</body>
</html>
