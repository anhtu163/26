<?php
	
	session_start();

	header('Content-Type: text/html; charset=UTF-8');
	
	if (isset($_POST['dangnhap'])) 
	{
		
		$con = mysqli_connect("localhost","root","","user");

		if (mysqli_connect_errno()){
    		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		}

		//include('ConnectMySQL.php');
 		
		// Lấy thông tin từ form khi user đăng nhập
		$username   	= addslashes($_POST['User']);
		$password      	= addslashes($_POST['Pass']);
	
		//Kiểm tra tên đăng nhập có tồn tại không	
		$sqlUser="SELECT Username, Password FROM tableuserdata WHERE Username='$username'";
		$resultUser=mysqli_query($con,$sqlUser);
		if (mysqli_num_rows($resultUser) == 0)	
		{        				
			echo "<script>alert('Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. '); window.location.href='/26';</script>";	
        	exit;
    	}	

		// Lấy mật khẩu trong tableuserdata ra từ tendangnhap nhập vào
		$row=mysqli_fetch_array($resultUser,MYSQLI_ASSOC);
		
		// So sánh 2 mật khẩu
		if ($password != $row["Password"]) 
		{        
			echo "<script>alert('Mật khẩu không đúng. Vui lòng nhập lại.'); window.location.href='/26';</script>";	
        	exit;
    	}

		//Lưu tên đăng nhập
    	$_SESSION['Username'] = $username;		
    	echo "Xin chào " . $username . "Bạn đã đăng nhập thành công";
    	die();
	}

?>