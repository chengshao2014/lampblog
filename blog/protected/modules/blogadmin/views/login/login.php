<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/css/common.css"/>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/jQuery-v1.7.2.js"/>
</script>
<title>LamnpBlog后台登录</title>
</head>
<body>
	<div class="content">
		<div class="loginborder">
			<div class="center">
				<form action="<?php echo Yii::app()->request->baseUrl; ?>/blogadmin/" method="post">
				<?php //$form = $this->beginWidget('CActiveForm')?>
				<?php
					$form = $this->beginWidget('CActiveForm', array(
					    'id' => 'login-form',
					    	'enableClientValidation' => true,
					    	'clientOptions' => array(
					        	'validateOnSubmit' => true,
					    		),
					        ));
					?>
				<div class="" style="float:center;height:60px">
					<div style="float:left;width:20%;height:60px;text-align:right;">登录:</div>
					<div style="width:auto;height:60px;float:left">
						<input type="text" name="username" id="username" onblur="showUser(this.value)" value="">
						<span id="authname"></span>
					</div>
						<?php //echo $form->textField($loginForm,'username',array('id'=>'username'))?>
				</div>
				<div class="" style="float:center;height:60px">
					<div style="float:left;width:20%;height:60px;text-align:right;">密码:</div>
					<div style="width:auto;height:60px;float:left">
						<input type="password" name="password" id="password" onblur="showPwd(this.value)" value="">
						<?php //echo $form->passwordField($loginForm,'password',array('id'=>'password'))?>
						<span id="authpwd"></span>
					</div>
				</div>
				<div class="" style="float:center;">
					<div style="float:left;width:20%;height:60px;text-align:right;">验证码:</div>
					<div style="width:auto;height:60px;float:left">
					<?php //echo $form->textField($loginForm,'captcha',array('id'=>'verify'));?>
					<input type="text" name="captcha" id="verify"  value="">
					</div>
					<div style="width:30%;height:60px;float:left;text-align:center;">
						<?php $this->widget('CCaptcha', array('showRefreshButton'=>false,'id' => 'veryCode',
           						 'clickableImage' => true,
           						 'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style' => 'cursor:pointer;','script'=>"onclick='showCaptcha(this.value)'",)));
       					 ?>
       					 <span id="authCaptcha"></span>
					</div>
				</div>
				<div class="" style="float:center;">
				<input type="submit" name="sub" value="登录" class="logins" onclick="authLogin();">
				<input type="reset" name="reset" value="重置" class="res" onclick="document.getElementById('username').focus();">
				</div>
				<?php $this->endWidget();?>
				</form>
			</div>
			<ul class="pro">
				<li class="error"></li></ul>
			<ul class="psd">
				<li class="error"></li>
			</ul>
			<ul>
				<li class="ver">
					<?php echo $form->error($loginForm,'captcha') ?>
				</li>
			</ul>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/loginauth.js"/></script>
</body>
</html>