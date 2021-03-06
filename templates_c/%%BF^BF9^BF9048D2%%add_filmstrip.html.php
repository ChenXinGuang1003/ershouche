<?php /* Smarty version 2.6.18, created on 2019-05-05 09:40:38
         compiled from admin/add_filmstrip.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/jquery.js"></script>
<link rel="stylesheet" href="admin/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="admin/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="admin/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="static/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript">
$(function() {
	//表单验证
	$(".filmstripform").Validform({
		tiptype:3
	});
});
KindEditor.ready(function(K) {
		var editor = K.editor({
			uploadJson : '<?php echo $this->_tpl_vars['adminpage']; ?>
?m=upload',
			fileManagerJson : '<?php echo $this->_tpl_vars['adminpage']; ?>
?m=upload_manager',
			allowFileManager : true,
		});
		K('#image1').click(function() {
			editor.loadPlugin('image', function() {
				editor.plugin.imageDialog({
					imageUrl : K('#url1').val(),
					clickFn : function(url, title, width, height, border, align) {
						K('#url1').val(url);
						editor.hideDialog();
					}
				});
			});
		});
	});
</script>
</head>
<body>
<div class="colorarea01">
<div class="search clearfix">
	<div class="searchL">
		<ul class="menulist">
			<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=filmstrip&a=list" class="list">返回轮播广告列表</a></li>
		</ul>
	</div>
</div>
<form name="form1" class="filmstripform" method="post" action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=filmstrip">
<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
<tr>
	<th>图片：</th>
	<td>
		<input type="text" name="pic" id="url1" value="<?php echo $this->_tpl_vars['filmstrip']['pic']; ?>
" datatype="*" nullmsg="请上传图片！"/>
		<input type="button" id="image1" value="选择图片" />
	</td>
</tr>
<tr>
<th>url：</th>
<td><input name="url" type="text" size="50" value="<?php echo $this->_tpl_vars['filmstrip']['url']; ?>
" datatype="url" nullmsg="请填写url！"/></td>
</tr>
<tr>
<th></th>
<td>
	<div class="buttons">
		<input type="submit" name="thevaluesubmit" value="提交保存" class="submit">
		<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
		<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['filmstrip']['id']; ?>
">
		<input type="hidden" name="typeid" value="<?php echo $this->_tpl_vars['typeid']; ?>
">
	</div>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>