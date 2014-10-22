<?php
	class SystemInfoController extends CController{
		public function actionInfo(){
			$this->renderPartial('info');
		}
	}