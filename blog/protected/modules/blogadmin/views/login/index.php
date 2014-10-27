<?php header("Cache-control:private"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>管理中心</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/css/common.css"/>
</head>
<frameset rows="64,*,20" frameborder="0" border="0" framespacing="0">
  <frame src="<?php echo $this->createUrl('login/top');?>" noresize="noresize" frameborder="0" name="topFrame" marginwidth="0" marginheight="0" target="main" scrolling="no">
  <frameset cols="200,*" id="frame">
	<frame src="<?php echo $this->createUrl('login/left');?>" name="leftFrame" noresize="noresize" marginwidth="0" marginheight="0" frameborder="0" target="main" scrolling="no">
	<frame src="<?php echo $this->createUrl('login/centre')?>" name="main" marginwidth="0" marginheight="0" frameborder="0" target="_self" scrolling="auto">
  </frameset>
  <frame src="<?php echo $this->createUrl('login/bottom');?>" width="100%" noresize="noresize" frameborder="0" name="footFrame" marginwidth="0" marginheight="0" target="main" scrolling="no">
</frameset>
<noframes>
  <body></body>
    </noframes>
</html>