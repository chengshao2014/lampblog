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
/**
 * 后台管理登录ajax验证
 * @param  {[type]} e [description]
 * @return {[type]}   [description]
 */
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
