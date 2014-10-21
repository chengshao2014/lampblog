<?php
	/**
	 * 登录页面以及登录验证
	 *@authon jack.achan
	 */
	class LoginController extends Controller{
		public function actionIndex(){
			$this->render('index');
		}
		/**
		 * username 用户名
		 * password 密码
		 * captcha  验证码
		 */
		function actionauthLogin(){
			$username = !empty($_POST['username'])?trim($_POST['username']):"";
			$password = !empty($_POST['password'])?trim($_POST['password']):null;
			$captcha = !empty($_POST['captcha'])?strtolower($_POST['captcha']):null;
			//获取Yii验证码
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
		}
		/**
		 * 调用验证码类
		 */
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
		/**
		 * 登录首页
		 */
		public function actionLogin()
		{
			$loginForm = new LoginForm();
			$this->render('login',array('loginForm'=>$loginForm));
		}
		
		/**
		 * 框架管理
		 */
		public function actionLeft(){
			$this->render('left');
		}
		/**
		 * 
		 */
		public function actionTop(){
			$this->render('top');
		}

		public function actionCentre(){
			$this->render('centre');
		}

		public function actionBottom(){
			$this->render('bottom');
		}
	}
