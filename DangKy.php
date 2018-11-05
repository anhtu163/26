<!DOCTYPE html>
<html>
	<header>
		<title>Đăng ký tài khoản</title>
		<meta charset="UTF-8">
			<link rel="stylesheet" href="style.css" />
	</header>		
	
	<body>
		<div id="wrapper">			
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
							<li><a href=/26/Ebook.php>Ebook</a></li>
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
				
				<li class="header-line"></li>
				<li>
					<ul>
					</ul>
				</li>
				<li class="header-line"></li>
				
				<li>					
					<fieldset class="group-signup">
						<legend class="legend">Đăng kí</legend>
						<form id="form-signup" name="formSignup" method="post" align="right-side" action="SignUp.php" 
							  onSubmit="return(onFormSignUp());">		
							<table cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td align="right">Tên đăng nhập</td>
										<td width="20"></td>
										<td align="left">
											<input type="text" placeholder="Tên đăng nhập" id="tendangnhap" name="tendangnhap" value>
										</td>
									</tr>
									<tr>
										<td align="right">Email</td>
										<td width="20"></td>
										<td align="left">
											<input type="email"  placeholder="Email" id="email" value name="email" style="width: 198px" >
										</td>
									</tr>
									<tr>
										<td align="right">Mật khẩu</td>
										<td width="20"></td>
										<td align="left">
											<input type="password"  placeholder="Mật khẩu" name="matkhau" id="matkhau" value>
										</td>
									</tr>
									<tr>
										<td align="right">Nhập lại mật khẩu</td>
										<td width="20"></td>
										<td align="left">
											<input type="password"  placeholder="Nhập lại mật khẩu" name="nhaplaimatkhau" id="nhaplaimatkhau" value >
										</td>
									</tr>
									<td colspan="3" style="padding:0px;" align="right">
									<input type="submit" name="signup" value="ĐĂNG KÍ" class="button">
									</td>
								</tbody>
							</table>
						</form>
					</fieldset>
					<script src="KiemTraDangKi.js"></script>
				</li>				
				
				
			</ul>	
		</div>				
	</body>
</html>
