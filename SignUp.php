<?php

	//include('ConnectMySQL.php');

	$con = mysqli_connect("localhost","root","","user");

	if (mysqli_connect_errno()){
    	echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}
 	
	header('Content-Type: text/html; charset=UTF-8');
	
	$username   	= addslashes($_POST['tendangnhap']);
	$email      	= addslashes($_POST['email']);
    $password	    = addslashes($_POST['matkhau']);
	$retypepassword = addslashes($_POST['nhaplaimatkhau']);
    	
	// Kiểm tra nếu trùng tendangnhap
	$sqlUser="SELECT Username FROM tableuserdata WHERE Username='$username'";
	$resultUser=mysqli_query($con,$sqlUser);
	if (mysqli_num_rows($resultUser) > 0) 
	{       
		echo "<script>alert('Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác'); window.location.href='DangKy.php';</script>";			
        exit;
    }	
	
	//Kiểm tra email đã có người dùng chưa
	$sqlEmail="SELECT Email FROM tableuserdata WHERE Email='$email'";
	$resultEmail=mysqli_query($con,$sqlEmail);
    if (mysqli_num_rows($resultEmail) > 0)
    {        
		echo "<script>alert('Email này đã có người dùng. Vui lòng chọn Email khác'); window.location.href='DangKy.php';</script>";	
        exit;
    }

	@$addMember=mysqli_query($con,"INSERT INTO tableuserdata(Username,Email,Password,Retypepassword)
	VALUES ('".$_POST['tendangnhap']."','".$_POST['email']."','".$_POST['matkhau']."','".$_POST['nhaplaimatkhau']."') ");
	mysqli_close($con);
?>