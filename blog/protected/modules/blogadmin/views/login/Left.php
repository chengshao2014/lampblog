<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>管理页面</title>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/prototype.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/moo.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/moo_002.js" type="text/javascript"></script>
<style>
body {
	font:12px Arial, Helvetica, sans-serif;
	color: #000;
	background-color: #EEF2FB;
	margin: 0px;
}
#container {
	width: 182px;
}
H1 {
	font-size: 12px;
	margin: 0px;
	width: 182px;
	cursor: pointer;
	height: 30px;
	line-height: 20px;	
}
H1 a {
	display: block;
	width: 182px;
	color: #000;
	height: 30px;
	text-decoration: none;
	moz-outline-style: none;
	background-image: url(/assets/admin/images/admin_m/menu_bgs.gif);
	background-repeat: no-repeat;
	line-height: 30px;
	text-align: center;
	margin: 0px;
	padding: 0px;
}
.content{
	width: 182px;
	height: 26px;
	
}
.MM ul {
	list-style-type: none;
	margin: 0px;
	padding: 0px;
	display: block;
}
.MM li {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	list-style-type: none;
	display: block;
	text-decoration: none;
	height: 26px;
	width: 182px;
	padding-left: 0px;
}
.MM {
	width: 182px;
	margin: 0px;
	padding: 0px;
	left: 0px;
	top: 0px;
	right: 0px;
	bottom: 0px;
	clip: rect(0px,0px,0px,0px);
}
.MM a:link {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(/assets/admin/images/admin_m/menu_bg1.gif);
	background-repeat: no-repeat;
	height: 26px;
	width: 182px;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	text-decoration: none;
}
.MM a:visited {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(/assets/admin/images/admin_m/menu_bg1.gif);
	background-repeat: no-repeat;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	height: 26px;
	width: 182px;
	text-decoration: none;
}
.MM a:active {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(/assets/admin/images/admin_m/menu_bg1.gif);
	background-repeat: no-repeat;
	height: 26px;
	width: 182px;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	text-decoration: none;
}
.MM a:hover {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	font-weight: bold;
	color: #006600;
	background-image: url(/assets/admin/images/admin_m/menu_bg2.gif);
	background-repeat: no-repeat;
	text-align: center;
	display: block;
	margin: 0px;
	padding: 0px;
	height: 26px;
	width: 182px;
	text-decoration: none;
}
</style>

</head>

<body>
<table bgcolor="#EEF2FB" border="0" cellpadding="0" cellspacing="0" height="280" width="100%">
  <tbody><tr>
    <td valign="top" width="182">
    <div id="container">
          <h1 class="type"><a href="javascript:void(0)">用户图片列表</a></h1>
      <div style="visibility: visible; opacity: 0.9999; overflow: hidden; height: 1%;" class="content">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tbody><tr>
            <td><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/menu_topline.gif" height="5" width="182"></td>
          </tr>
        </tbody></table>
        <ul class="MM">
                  <!-- <li><a href="__ROOT__/Userpicture/index" target="main">上传图片</a></li> -->
                  <li><a href="__ROOT__/Userpicture/show_img" target="main">浏览图片</a></li>
                </ul>
      </div>
	  <!-----------------------功能段---------------------------->
            <h1 class="type"><a href="javascript:void(0)">用户注册信息</a></h1>
      <div style="visibility: hidden; opacity: 0; overflow: hidden; height: 0px;" class="content">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tbody><tr>
            <td><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/menu_topline.gif" height="5" width="182"></td>
          </tr>
        </tbody></table>
        <ul class="MM">
                  <li><a href="/Choiceness/getlistchoiceness" target="main">用户信息</a></li>
                  <li><a href="/UserReview/index" target="main">浏览评论</a></li>
                </ul>
      </div>
	   <!-----------------------功能段---------------------------->
      <!-----------------------功能段---------------------------->
            <h1 class="type"><a href="javascript:void(0)">总数统计信息</a></h1>
      <div style="visibility: hidden; opacity: 0; overflow: hidden; height: 0px;" class="content">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tbody><tr>
            <td><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/menu_topline.gif" height="5" width="182"></td>
          </tr>
        </tbody></table>
        <ul class="MM">
                  <li><a href="/Countinfo/index" target="main">图片上传总数</a></li>
				  <li><a href="/CountUserinfo/index" target="main">用户注册总数</a></li>
                </ul>
      </div>
	   <!-----------------------功能段---------------------------->
	    <!-----------------------功能段---------------------------->
            <h1 class="type"><a href="javascript:void(0)">导出注册用户</a></h1>
      <div style="visibility: hidden; opacity: 0; overflow: hidden; height: 0px;" class="content">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tbody><tr>
            <td><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/menu_topline.gif" height="5" width="182"></td>
          </tr>
        </tbody></table>
        <ul class="MM">
                  <li><a href="/UserDao/index" target="main">查询并导出用户</a></li>
                </ul>
      </div>
	   <!-----------------------功能段---------------------------->
	   <!-----------------------功能段---------------------------->
            <h1 class="type"><a href="javascript:void(0)">奖项数据导出</a></h1>
      <div style="visibility: hidden; opacity: 0; overflow: hidden; height: 0px;" class="content">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tbody><tr>
            <td><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/menu_topline.gif" height="5" width="182"></td>
          </tr>
        </tbody></table>
        <ul class="MM">
                  <li><a href="index.php?r=blogadmin/systeminfo/info" target="main">读取奖项用户</a></li>
                </ul>
      </div>
	   <!-----------------------功能段---------------------------->
        <script type="text/javascript">
		var contents = document.getElementsByClassName('content');
		var toggles = document.getElementsByClassName('type');
	
		var myAccordion = new fx.Accordion(
			toggles, contents, {opacity: true, duration: 400}
		);
		myAccordion.showThisHideOpen(contents[0]);
	</script>
	
        </td>
  </tr>
</tbody></table>


</body></html>