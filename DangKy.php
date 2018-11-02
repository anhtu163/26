<!DOCTYPE html>
<html>
	<header>
		<title>Đăng ký tài khoản</title>
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
					<fieldset class="group-signup">
						<legend class="legend">Đăng Kí</legend>
						<form id="form-signup" name="formSignup" method="get" align="right-side" onSubmit="return(onFormSignUp());">
							<table cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td align="right">Tên đăng nhập</td>
										<td width="20"></td>
										<td align="left">
											<input type="text" placeholder="Tên đăng nhập" id="tendangnhap" value>
										</td>
									</tr>
									<tr>
										<td align="right">Email</td>
										<td width="20"></td>
										<td align="left">
											<input type="email"  placeholder="Email" id="email" value style="width: 198px" ">
										</td>
									</tr>
									<tr>
										<td align="right">Mật khẩu</td>
										<td width="20"></td>
										<td align="left">
											<input type="password"  placeholder="Mật khẩu" id="matkhau" value>
										</td>
									</tr>
									<tr>
										<td align="right">Nhập lại mật khẩu</td>
										<td width="20"></td>
										<td align="left">
											<input type="password"  placeholder="Nhập lại mật khẩu" id="nhaplaimatkhau" value >
										</td>
									</tr>
									<tr>
										<td align="right">        </td>
										<td width="20"></td>
										<td align="left">
											<button type ="submit">Đăng kí</button>									
									<!--<a type="button" href="/26/DangKy.php">Đăng Ký Tài Khoản</a>-->
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</fieldset>
				</li>
			</ul>	



		</div>
		<script src="KiemTraDangKi.js"></script>											  
	</body>
</html>
