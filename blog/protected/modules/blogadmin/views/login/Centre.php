<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link href="/css/skin.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/css/jquery.css">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/admin_m/jquery-1.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/admin_m/jquery_002.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/admin_m/jquery_004.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/admin_m/jquery_011.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/admin_m/jquery_009.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/admin_m/jquery_012.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/admin_m/jquery_008.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/admin_m/jquery_006.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/admin_m/jquery_007.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/admin_m/jquery_010.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/admin_m/jquery_005.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/admin_m/jquery.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/admin_m/formvalidator.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/js/jquery/flot/excanvas.min.js"></script><![endif]-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/admin_m/jquery_013.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/admin_m/jquery_003.js"></script>
<style>
select{height:20px; width:100px}
input.text {height:20px;width:100px }
fieldset { padding:0; border:0; margin-top:15px; }
h1 { font-size: 1.2em; margin: .6em 0; }
div#users-contain {width:100%;}
div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
.ui-dialog .ui-state-error { padding: .3em; }
.validateTips { border: 1px solid transparent; padding: 0.3em; }
#divPageNav .curr{color:#d2d2d2;font-size:15px;}
#divPageNav A{color:#555555;font-size:15px;}
</style>
<script>
$.ajaxSetup({cache:false});
var reportPicOptions = {
        lines: { show: true },
        points: { show: true },
        grid: { hoverable: true, clickable: true },
        xaxis: {labelWidth:50,mode:"time",minTickSize:[1, "day"],timeformat: "%y/%m/%d",color:"black"},
        yaxis:{ticks:1,tickDecimals:0}
    	};
    /** 
    * 时间对象的格式化 
    */  
    Date.prototype.format = function(format)  
    {  
    /* 
    * format="yyyy-MM-dd hh:mm:ss"; 
    */  
    var o = {  
    "M+" : this.getMonth() + 1,  
    "d+" : this.getDate(),  
    "h+" : this.getHours(),  
    "m+" : this.getMinutes(),  
    "s+" : this.getSeconds(),  
    "q+" : Math.floor((this.getMonth() + 3) / 3),  
    "S" : this.getMilliseconds()  
    }  
      
    if (/(y+)/.test(format))  
    {  
    format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4  
    - RegExp.$1.length));  
    }  
      
    for (var k in o)  
    {  
    if (new RegExp("(" + k + ")").test(format))  
    {  
    format = format.replace(RegExp.$1, RegExp.$1.length == 1  
    ? o[k]  
    : ("00" + o[k]).substr(("" + o[k]).length));  
    }  
    }  
	 return format;  
    }  
</script></head>



<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr>
    <td background="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/mail_leftbg.gif" valign="top" width="17">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/left-top-right.gif" height="29" width="17">
	</td>
    <td background="/images/content-bg.gif" valign="top">
		<table class="left_topbg" id="table2" border="0" cellpadding="0" cellspacing="0" height="31" width="100%">
      <tbody>
	  <tr>
        <td height="31"><div class="titlebt">欢迎界面</div></td>
      </tr>
    </tbody></table></td>
    <td background="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/mail_rightbg.gif" valign="top" width="16"><img src="/images/nav-right-bg.gif" height="29" width="16"></td>
  </tr>
  <tr>
    <td background="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/mail_leftbg.gif" valign="middle">&nbsp;</td>
    <td bgcolor="#F7F8F9" height="500px;" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" width="98%">
      <tbody><tr>
        <td colspan="2" valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" valign="top"><span class="left_bt">感谢您使用 </span><br>
           <br>
		</td>
        <td width="7%">&nbsp;</td>
        <td valign="top" width="40%">
        </td>
      </tr>
      <tr>
        <td colspan="2" height="300px">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" valign="top">
       </td>
        <td>&nbsp;</td>
        <td valign="top">
       </td>
      </tr>
      <tr>
        <td colspan="4" height="40"><table bgcolor="#CCCCCC" border="0" cellpadding="0" cellspacing="0" height="1" width="100%">
          <tbody><tr>
            <td></td>
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td width="2%">&nbsp;</td>
        <td class="left_txt" width="51%"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/icon-mail2.gif" height="11" width="16"> 客户服务邮箱：<br>
              <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/icon-phone.gif" height="14" width="17"> </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </tbody></table></td>
    <td background="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td background="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/mail_leftbg.gif" valign="bottom">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/buttom_left2.gif" height="17" width="17">
	</td>
    <td background="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/buttom_bgs.gif">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/buttom_bgs.gif" height="17" width="17">
	</td>
    <td background="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/mail_rightbg.gif" valign="bottom">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/images/admin_m/buttom_right2.gif" height="17" width="16">
	</td>
  </tr>
</tbody></table>

</body></html>