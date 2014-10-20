<?php
	/**
	 * 登录页面以及登录验证
	 */
	class LoginController extends Controller{
		public function actionIndex(){
			/*
			$loginForm = new LoginForm();
			if(isset($_POST['LoginForm']) || is_array($_POST['LoginForm']))
			{
				$loginForm->attributes = $_POST['LoginForm'];
			}
			
			if($loginForm->validate())
			{
				$user_model = Users::model()->findByAttributes(array('username' => $loginForm->username));	
			}
			**/
			$this->render('index');
		}
		static function authLogin(){
			if($_POST['username']==""){
				echo "用户名不能为空！";
			}
			/*if(isset($_POST['LoginForm']) && is_array($_POST['LoginForm']))
			{
				$uname = !empty($_POST['LoginForm']['username'])?trim($_POST['LoginForm']['username']):null;
				$password = !empty($_POST['LoginForm']['password'])?trim($_POST['LoginForm']['password']):null;
				$captcha = !empty($_POST['LoginForm']['captcha'])?strtolower($_POST['LoginForm']['captcha']):null;
			}**/
		}
		public function actions()
		{
			return array(
				'captcha'=>array(
					'class'=>'system.web.widgets.captcha.CCaptchaAction',
					'width'=>'90',
					'height'=>'35',
					'maxLength'=>'4',
					'minLength'=>'4',
					'padding' =>'-1',
					'offset' =>'3',
					),
				);
		}
		public function actionLogin()
		{
			$loginForm = new LoginForm();
			//self::authLogin();
			$this->render('login',array('loginForm'=>$loginForm));
		}
	
	}
