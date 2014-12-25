<?php header("Cache-control:private"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta charset="utf-8" />
<title>KindEditor PHP</title>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/css/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/css/plugins/code/prettify.css" />
<script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/kindeditor.js"></script>
<script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/lang/zh_CN.js"></script>
<script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/js/plugins/code/prettify.js"></script>
<style type="text/css">
	body{margin:0px; padding:0px}
	#mainbody{width:900px; height:680px; border:1px solid #ccc;}
	#basic{width:94%;height:94%;border:1px solid #ccc;margin:0 auto;margin:18px}
	textarea{resize:none}
</style>
</head>
<body>
	<div id="mainbody">
		<div id="basic">
		<form name="example" method="post" action="/index.php?r=blogadmin/article/show">
			<textarea style="width: 100%; height: 500px; visibility: hidden;
			overflow-x:visible;overflow-y:visible;resize:none" name="content">
			</textarea>
			<br /> <input type="submit" name="button" value="提交内容" /> (提交快捷键: Ctrl + Enter)
		</form>
		</div>
	</div>
</body>
<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]', {
				//cssPath : '../plugins/code/prettify.css',
				//uploadJson : '../php/upload_json.php',
				//fileManagerJson : '../php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
</script>
</html>

