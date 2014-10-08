<?php
	/**
	 * 登录页面以及登录验证
	 */
	class LoginController extends Controller{
		public function actionIndex(){
			/**if(isset($_POST['LoginForm']))
			{
				$loginForm->attributes = $_POST['LoginForm'];
			}
			if($loginForm->validate())
			{
				$user_model = Users::model()->findByAttributes(array('username' => $loginForm->username));
			}**/
			$this->render('index');
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
			$this->render('login',array('loginForm'=>$loginForm));
		}
		
	}