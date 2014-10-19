function authLogin(username){
	/**var uname = document.getElementById('password');
	if(uname.value==""){
		document.getElementById("authuname").innerHTML="密码不能为空";
		return false;
	}**/
		
}

function showUser(uname){
	if(uname=="" || uname=="undefined"){
		document.getElementById("authname").innerHTML="<p style='color:red;float:right;line-height:40px;padding-left:32px;'>*用户名不能为空</p>";
	}else{
		document.getElementById("authname").innerHTML="<p></p>";
	}
}

function showPwd(passwd){
	if(passwd=="" || passwd=="undefined"){
		document.getElementById("authpwd").innerHTML="<p style='color:red;float:right;line-height:40px;padding-left:32px;'>*密码不能为空</p>";
	}else{
		document.getElementById("authpwd").innerHTML="<p></p>";
	}
}

function showCaptcha(captcha){
	//if(captcha==""|| captcha=="undefined"){
		//var capt=document.getElementById('veryCode').value;
		alert(captcha);
	//}
}
