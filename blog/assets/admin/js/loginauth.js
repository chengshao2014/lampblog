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
		//
	//}
}

$('form').submit(function(e){
	e.preventDefault();
	var url = "/index.php?r=blogadmin/login/authLogin/";
	username = $("#username").val();
	password = $("#password").val();
	captcha = $("#verify").val();
	requestData = {'username': username, 'password': password,'captcha':captcha};
 	$.post(url, requestData, function(data) {
  			if(username=="" || username=="undefined"){
				document.getElementById("authname").innerHTML="<p style='color:red;float:right;line-height:40px;padding-left:32px;'>*用户名不能为空</p>";
			}else{
				document.getElementById("authname").innerHTML="<p></p>";
			}
			if(data){
				alert(data);
			}else{
				location.href="/blogadmin/index";
			}
 		});
});
