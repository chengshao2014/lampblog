<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>管理页面</title>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/prototype.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/moo.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/moo_002.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/css/main.css"/>
</head>
<body>
<table bgcolor="#EEF2FB" border="0" cellpadding="0" cellspacing="0" height="280" width="100%">
  <tbody><tr>
    <td valign="top" width="182">
    <div id="container">
      <!--<h1 class="type"><a href="javascript:void(0)">用户图片列表</a></h1>
      <div style="visibility: visible; opacity: 0.9999; overflow: hidden; height: 1%;" class="content">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tbody><tr>
            <td><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/menu_topline.gif" height="5" width="182"></td>
          </tr>
        </tbody></table>
        <ul class="MM">
                  <!-- <li><a href="__ROOT__/Userpicture/index" target="main">上传图片</a></li> -->
                  <!--<li><a href="__ROOT__/Userpicture/show_img" target="main">浏览图片</a></li>
                </ul>
      </div>-->
	  <!-----------------------功能段---------------------------->
            <h1 class="type"><a href="javascript:void(0)">用户信息</a></h1>
      <div style="visibility: hidden; opacity: 0; overflow: hidden; height: 0px;" class="content">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tbody><tr>
            <td><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/menu_topline.gif" height="5" width="182"></td>
          </tr>
        </tbody></table>
        <ul class="MM">
                  <li><a href="/Choiceness/getlistchoiceness" target="main">用户信息</a></li>
                  <li><a href="/UserReview/index" target="main">新增用户</a></li>
                </ul>
      </div>
	   <!-----------------------功能段---------------------------->
      <!-----------------------功能段---------------------------->
            <h1 class="type"><a href="javascript:void(0)">文章管理</a></h1>
      <div style="visibility: hidden; opacity: 0; overflow: hidden; height: 0px;" class="content">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tbody><tr>
            <td><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/menu_topline.gif" height="5" width="182"></td>
          </tr>
        </tbody></table>
        <ul class="MM">
                  <li><a href="/Countinfo/index" target="main">发布文章</a></li>
				  <li><a href="/CountUserinfo/index" target="main">查看文章</a></li>
                  <li><a href="/CountUserinfo/index" target="main">查看评论</a></li>
                </ul>
      </div>
	   <!-----------------------功能段---------------------------->
	    <!-----------------------功能段---------------------------->
            <h1 class="type"><a href="javascript:void(0)">在线统计</a></h1>
      <div style="visibility: hidden; opacity: 0; overflow: hidden; height: 0px;" class="content">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tbody><tr>
            <td><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/menu_topline.gif" height="5" width="182"></td>
          </tr>
        </tbody></table>
        <ul class="MM">
                  <li><a href="/UserDao/index" target="main">访问统计</a></li>
                </ul>
      </div>
	   <!-----------------------功能段---------------------------->
	   <!-----------------------功能段---------------------------->
            <h1 class="type"><a href="javascript:void(0)">系统设置</a></h1>
      <div style="visibility: hidden; opacity: 0; overflow: hidden; height: 0px;" class="content">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tbody><tr>
            <td><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/menu_topline.gif" height="5" width="182"></td>
          </tr>
        </tbody></table>
        <ul class="MM">
                  <li><a href="<?php echo $this->createUrl('systeminfo/info');?>" target="main">系统设置</a></li>
                  <li><a href="<?php echo $this->createUrl('login/repasswd');?>" target="main">修改密码</a></li>
                  <li><a href="/" target="parent">回到首页</a></li>

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