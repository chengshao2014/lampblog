<?php
	/**
	 * 登录页面以及登录验证
	 */
	class LoginController extends Controller{
		public function actionIndex(){
			$this->render('index');
		}
		function actionauthLogin(){
			$username = !empty($_POST['username'])?trim($_POST['username']):"";
			$password = !empty($_POST['password'])?trim($_POST['password']):null;
			$captcha = !empty($_POST['captcha'])?strtolower($_POST['captcha']):null;
			$cap = $this->createAction('captcha')->getVerifyCode();
			if($username==null){
				echo " 用户名不允许为空 ";
			}elseif($username!="cheng"){
				echo " 用户名不正确 " ;
			}
			if($password==null){
				echo " 密码不能为空";
			}elseif($password!=123){
				echo " 密码不正确 ";
			}
			if($captcha==null){
				echo " 验证码不允许为空 ";
			}elseif($captcha!=$cap){
				echo " 验证码不正确，请重新输入 ";
			}
			//exit(0);
			/**if(!empty($_POST) && is_array($_POST))
			{
				$cap = $this->createAction('captcha')->getVerifyCode();
				$cap = strtolower($cap);
				$username = !empty($_POST['username'])?trim($_POST['username']):null;
				$password = !empty($_POST['password'])?trim($_POST['password']):null;
				$captcha = !empty($_POST['captcha'])?strtolower($_POST['captcha']):null;
				
				if($cap!=$captcha){
					echo "<script>alert('验证码输入不正确')</script>";
				}
				if(isset($uname)==false || isset($passwd)==false || isset($captcha)==false){
					echo "<script>alert('请核对信息后重新登录')</script>";
					$this->redirect('login','请核对信息后重新登录');
				}
			}**/
			#$this->render('authLogin');
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
