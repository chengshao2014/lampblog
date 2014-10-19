<?php
	/**
	 * 登录页面以及登录验证
	 */
	class LoginController extends Controller{
		public function actionIndex(){
			$loginForm = new LoginForm();
			if(isset($_POST['LoginForm']) || is_array($_POST['LoginForm']))
			{
				$loginForm->attributes = $_POST['LoginForm'];
			}
			
			if($loginForm->validate())
			{
				$user_model = Users::model()->findByAttributes(array('username' => $loginForm->username));	
			}
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
			if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form')
			{
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}
			// collect user input data
			if (isset($_POST['LoginForm'])){
				$loginForm->attributes = $_POST['LoginForm'];
				// validate user input and redirect to the previous page if valid
				if ($loginForm->validate()) {
					$user_model = Users::model()->findByAttributes(array('username' => $loginForm->username));
					if ($loginForm->login()) {
						// Set ip and date attributes to update user record
						$attributes = array(
							'last_loginip' => ip2long(Yii::app()->request->userHostAddress),
							'last_logindate' => date('Y-m-d H:i:s', time()),
						);
						$this->redirect('index');
					}
				}
			}
			$this->render('login',array('loginForm'=>$loginForm));
		}
	
	
	}

// set the login page layout
        $this->layout = '/layouts/login_page';
        $model = new LoginForm;
        // if it is ajax validation request
        
        
        // display the login form
        $this->render('login', array(
            'model' => $model,
        ));