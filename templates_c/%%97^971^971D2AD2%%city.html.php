<?php /* Smarty version 2.6.18, created on 2019-05-05 14:35:46
         compiled from m/city.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title><?php echo $this->_tpl_vars['setting']['keywords']; ?>
-<?php echo $this->_tpl_vars['setting']['sitename']; ?>
</title>
	<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/page.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="main mt10">
	<div class="arealist">
	<h3><span class="title"><a href="index.php?m=city&cid=0">全国</a></span></h3>
	<?php $_from = $this->_tpl_vars['arealist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['area']):
?>
		<h3><span class="title"><?php echo $this->_tpl_vars['area']['name']; ?>
</span></h3>
		<ul class="citylist clearfix">
		<?php $_from = $this->_tpl_vars['area']['citylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['city']):
?>
			<li><a href="index.php?m=city&cid=<?php echo $this->_tpl_vars['city']['id']; ?>
"><?php echo $this->_tpl_vars['city']['name']; ?>
</a></li>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
	<?php endforeach; endif; unset($_from); ?>
	</div>
</div>
<!--底部结束-->
</body>
</html>