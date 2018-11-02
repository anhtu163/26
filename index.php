<!DOCTYPE html>
<html>
	<header>
		<title>Trang Chủ My Library</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css" />
	</header>
	<body>
		<div id="wrapper">
		<!--<script>
			alert("Chào mừng bạn đến với trang web Quản Lý Thư Viện");
		</script>-->
			<div id="menu-top">
				<div id="top-content">
					<div id="logo">
						<img src="/26/logo.jpg" width="100" height="100">
					</div>
					<pre><br><br><br><br></pre>
					<div class="tab-menu">
						<ul id="main-menu">           
							<li><a href="/26">Trang Chủ</a></li>
							<li><a href="/26/ThongTin.php">Thông Tin</a></li>
							<li><a href=/26/Ebook.php>Ebook</a></li>
							<li><a href="/26/QA.php">FAQ</a></li>
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
						<form id="form-search" name="formSearch" method="get" align="right-side">
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
											<input type="text"  placeholder="Thể Loại" id="theloai" value>
										</td>
									</tr>
									<tr>
										<td align="right">Tác giả</td>
										<td width="20"></td>
										<td align="left">
											<input type="text"  placeholder="Tác Giả" id="tacgia" value>
										</td>
									</tr>
									<tr>
										<td align="right">Năm Xuất Bản</td>
										<td width="20"></td>
										<td align="left">
											<input type="text"  placeholder="Năm Xuất Bản" id="namxuatban" value>
										</td>
									</tr>
									<tr>
										<td align="right">        </td>
										<td width="20"></td>
										<td align="left">
											<button type ="submit">Tìm Kiếm</button>
									<!--<a type="button" href="/26/DangKy.php">Đăng Ký Tài Khoản</a>-->
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</fieldset>
				</li>
				<li>
					<pre><ul>

					</ul></pre>
				</li>
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
											<input type="text" placeholder="Tên Đăng Nhập" id="user" value>
										</td>
									</tr>
									<tr>
										<td align="right">Password</td>
										<td width="20"></td>
										<td align="left">
											<input type="password"  placeholder="Mật khẩu" id="pass" value>
										</td>
									</tr>
									<tr>
										<td align="right">        </td>
										<td width="20"></td>
										<td align="left">
											<button type ="submit">Đăng Nhập</button>
											<a type="button" href="/26/DangKy.php">Đăng Ký Tài Khoản</a>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</fieldset>
				</li>
			</ul>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<ul>
				<div id = "menu-top">
					<div id = "top-content" >
						<div id="top-line"></div>
					</div>
				</div>
			</ul>	
		</div>

		<script src="function.js"></script>
	</body>
</html>