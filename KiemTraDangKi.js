// JavaScript Document
//Check validation data (sign up)
var userName = document.getElementById('tendangnhap');
var Email = document.getElementById('email');
var Pass = document.getElementById('matkhau');
var retypePass = document.getElementById('nhaplaimatkhau');


function onFormSignUp(){
	var user=userName.value;
	var email=Email.value;
	var pass=Pass.value;
	var retype=retypePass.value;
	
	if(user === ""){
		alert("Vui lòng nhập tên đăng nhập !");	
		userName.focus();
		return false;
	}
	
	if(email === ""){
		alert("Vui lòng nhập địa chỉ email !");
		Email.focus();
		return false;
	}
	
	if(pass === ""){
		alert("Vui lòng nhập mật khẩu !");
		Pass.focus();
		return false;
	}
	
	if(retype === ""){
		alert("Vui lòng nhập lại mật khẩu !");
		retypePass.focus();
		return false;
	}
	
	if(pass !== retype){
		alert("Vui lòng nhập lại cho đúng mật khẩu !");
		retypePass.focus();
		return false;
	}
	
	var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
	
	if (atpos < 1 || ( dotpos - atpos != 6 )) {
            alert("Vui lòng nhập đúng định dạng email !")                        
			Email.focus();
			return false;
    }	
	alert("Đăng kí tài khoản thành công");
	return true;
}