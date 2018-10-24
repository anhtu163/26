var CORRECT_USER = 'laptrinhio';
var CORRECT_PASS = '123456';


var inputUsername = document.getElementById('user');
var inputPassword = document.getElementById('pass');

var formLogin = document.getElementById('form-login');

if(formLogin.attachEvent){
	formLogin.attachEvent('submit',onFormSubmit);
}
else{
	formLogin.addEventListener('submit',onFormSubmit);
}

function onFormSubmit(e){
	var username = inputUsername.value;
	var password = inputPassword.value;

	if(username == CORRECT_USER && password == CORRECT_PASS)
	{
		alert('Dang nhap thanh cong');
	}
	else{
		alert('Dang nhap that bai');
	}
}

var CORRECT_TENSACH = 'Sách về website';
var CORRECT_THELOAI = 'Giáo dục';
var CORRECT_TACGIA = ' ';
var CORRECT_NAMXUATBAN = ' ';


var inputTenSach = document.getElementById('tensach');
var inputTheLoai = document.getElementById('theloai');
var inputTacGia = document.getElementById('tacgia');
var inputNamXuatBan = document.getElementById('namxuatban');

var formSearch = document.getElementById('form-search');

if(formSearch.attachEvent){
	formSearch.attachEvent('submit',onFormSearch);
}else{
	formSearch.attachEvent('submit',onFormSearch);
}

function onFormSearch(e)
{
	var tensach = inputTenSach.value;
	var theloai = inputTheLoai.value;
	var tacgia = inputTacGia.value;
	var namxuatban = inputNamXuatBan.value;

	if(tensach == CORRECT_TENSACH 
		&& theloai == CORRECT_THELOAI 
		&& tacgia == CORRECT_TACGIA 
		&& namxuatban == CORRECT_NAMXUATBAN)
	{
		alert('Có 1 cuốn sách được tìm thấy');
	}
	else
	{
		alert('Không tìm thấy cuốn sách nào');
	}
}