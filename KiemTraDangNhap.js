// JavaScript Document

//Check validation data (sign up)
var userName = document.getElementById('User');
var password = document.getElementById('Pass');


function onFormSignIn(){
	var user=userName.value;
	var pass=password.value;	
	
	if(user === ""){
		alert("Vui lòng nhập tên đăng nhập !");	
		userName.focus();
		return false;
	}		
	
	if(pass === ""){
		alert("Vui lòng nhập mật khẩu !");
		password.focus();
		return false;
	}		
	return true;
}