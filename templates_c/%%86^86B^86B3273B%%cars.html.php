<?php /* Smarty version 2.6.18, created on 2019-04-28 10:09:52
         compiled from m/cars.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title><?php echo $this->_tpl_vars['setting']['title']; ?>
</title>
	<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/page.css" rel="stylesheet" type="text/css"/>
	<script src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/js/jquery.js" type="text/javascript"></script>	
	<script src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/js/TouchSlide.1.1.js"></script>
</head>
<body>
<!--头部-->
<div class="comnav clearfix">
	<a href="javascript:window.history.go(-1);" class="reback">返回</a>
	<a href="index.php" class="home">首页</a>
	汽车详情
</div>
<!--头部结束-->
<!--主体-->
<?php if ($this->_tpl_vars['cars']['p_mainpic'] <> ""): ?>
<div class="main mt10">
	<div id="focus" class="carpic">
		<div class="hd">
			<ul></ul>
		</div>
		<div class="bd">
			<ul>
				<?php $_from = $this->_tpl_vars['pic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pic']):
?>
				<li><a href="#"><img _src="<?php echo $this->_tpl_vars['pic']; ?>
" src="images/blank.png" /></a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		TouchSlide({ 
			slideCell:"#focus",
			titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
			mainCell:".bd ul", 
			effect:"left", 
			autoPlay:true,//自动播放
			autoPage:true, //自动分页
			switchLoad:"_src" //切换加载，真实图片路径为"_src" 
		});
	</script>
</div>
<?php endif; ?>
<div class="carname">
	<?php echo $this->_tpl_vars['cars']['p_allname']; ?>

</div>
<div class="detailbox">
	<div class="box">
		<p class="pl10">报价：<span class="orange01 fb f16"><?php echo $this->_tpl_vars['cars']['p_price']; ?>
</span></p>
		<ul class="detaillist clearfix">
			<li><span class="fb">上牌日期：</span><?php echo $this->_tpl_vars['cars']['p_year']; ?>
年<?php echo $this->_tpl_vars['cars']['p_month']; ?>
月</li>
			<li><span class="fb">发布日期：</span><?php echo $this->_tpl_vars['cars']['listtime']; ?>
</li>
		</ul>
	</div>
</div>
<div class="detailbox">
	<h3>基本信息</h3>
	<div class="box">
		<ul class="detaillist mt10 clearfix">
			<li><span class="fb">地区：</span>温州</li>
			<li><span class="fb">车型：</span><?php echo $this->_tpl_vars['cars']['p_modelname']; ?>
</li>	
			<li><span class="fb">行驶里程：</span><?php echo $this->_tpl_vars['cars']['p_kilometre']; ?>
万公里</li>
			<li><span class="fb">颜色：</span><?php echo $this->_tpl_vars['cars']['p_color']; ?>
</li>
			<li><span class="fb">变速箱：</span><?php echo $this->_tpl_vars['cars']['p_transmission']; ?>
</li>
			<li><span class="fb">排量：</span><?php echo $this->_tpl_vars['cars']['p_gas']; ?>
</li>
			<li><span class="fb">上次验车时间：</span><?php if ($this->_tpl_vars['cars']['p_exatime'] <> ''): ?><?php echo $this->_tpl_vars['cars']['p_exatime']; ?>
<?php else: ?>无<?php endif; ?></li>
			<li><span class="fb">交强险截止日期：</span><?php if ($this->_tpl_vars['cars']['p_securedate'] <> ''): ?><?php echo $this->_tpl_vars['cars']['p_securedate']; ?>
<?php else: ?>无<?php endif; ?></li>
			<li><span class="fb">车船使用税有效期：</span><?php if ($this->_tpl_vars['cars']['p_tax'] <> ''): ?><?php echo $this->_tpl_vars['cars']['p_tax']; ?>
<?php else: ?>无<?php endif; ?></li>
			<li><span class="fb">车辆出厂日期：</span><?php if ($this->_tpl_vars['cars']['p_productiontime'] <> ''): ?><?php echo $this->_tpl_vars['cars']['p_productiontime']; ?>
<?php else: ?>无<?php endif; ?>
		</ul>
	</div>
</div>
<div class="detailbox mt15">
	<h3>车辆概述</h3>
	<div class="box">
		<?php echo $this->_tpl_vars['cars']['p_details']; ?>

	</div>
</div>
<?php if ($this->_tpl_vars['cars']['uid'] == 0): ?>
<div class="detailbox mt15">
	<h3>联系方式</h3>
	<div class="box">
		<?php if ($this->_tpl_vars['cars']['p_username'] <> ''): ?><p><span>联系人：<?php echo $this->_tpl_vars['cars']['p_username']; ?>
</span></p><?php endif; ?>
		<?php if ($this->_tpl_vars['cars']['p_tel'] <> ''): ?><p class="mt5">手机：<?php echo $this->_tpl_vars['cars']['p_tel']; ?>
</p><?php endif; ?>
	</div>
</div>
<?php else: ?>
	<?php if ($this->_tpl_vars['shop']['isdealer'] == 1): ?>
	<div class="detailbox mt15">
		<h3>联系方式</h3>
		<div class="box">
			<?php if ($this->_tpl_vars['shop']['nicname'] <> ''): ?><p class="mt5">联系人：<?php echo $this->_tpl_vars['shop']['nicname']; ?>
</p><?php endif; ?>
			<?php if ($this->_tpl_vars['shop']['mobilephone'] <> ''): ?><p class="mt5">手机：<?php echo $this->_tpl_vars['shop']['mobilephone']; ?>
</p><?php endif; ?>
		</div>
	</div>
	<?php else: ?>
	<div class="detailbox mt15">
		<h3>店铺信息</h3>
		<div class="box">
			<?php if ($this->_tpl_vars['shop']['nicname'] <> ''): ?><p><span>联系人：<?php echo $this->_tpl_vars['shop']['nicname']; ?>
</span></p><?php endif; ?>
			<?php if ($this->_tpl_vars['shop']['mobilephone'] <> ''): ?><p class="mt5">手机：<?php echo $this->_tpl_vars['shop']['mobilephone']; ?>
</p><?php endif; ?>
			<?php if ($this->_tpl_vars['shop']['tel'] <> ''): ?><p class="mt5">固话：<?php echo $this->_tpl_vars['shop']['tel']; ?>
</p><?php endif; ?>
			<?php if ($this->_tpl_vars['shop']['address'] <> ''): ?>地址：<?php echo $this->_tpl_vars['shop']['address']; ?>
</p><?php endif; ?>
			<p class="mt5 tc"><a href="index.php?m=shop&id=<?php echo $this->_tpl_vars['shop']['id']; ?>
" class="entermenu">进入商家店铺</a></p>
		</div>
	</div>
	<?php endif; ?>
<?php endif; ?>
<div class="detailbox mt15">
	<h3>同车型推荐</h3>
	<?php $_from = $this->_tpl_vars['samecar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['samecarlist']):
?>
	<div class="carlist clearfix mt10">
		<div class="carlist_left">
			<a href="index.php?m=cars&id=<?php echo $this->_tpl_vars['samecarlist']['p_id']; ?>
"><?php if ($this->_tpl_vars['samecarlist']['p_mainpic'] <> ''): ?><img src="<?php echo $this->_tpl_vars['samecarlist']['p_mainpic']; ?>
"/><?php else: ?>暂无图片<?php endif; ?></a>
		</div>
		<div class="carlist_right">
			<p class="f12 fb"><a href="index.php?m=cars&id=<?php echo $this->_tpl_vars['samecarlist']['p_id']; ?>
"><?php echo $this->_tpl_vars['samecarlist']['p_allname']; ?>
</a></p>
			<p>上牌日期：<?php echo $this->_tpl_vars['samecarlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['samecarlist']['p_month']; ?>
月</p>
			<p><span class="orange01 f14 fr pr10 fb"><?php echo $this->_tpl_vars['samecarlist']['p_price']; ?>
</span><?php echo $this->_tpl_vars['samecarlist']['listtime']; ?>
</p>
		</div>
	</div>
	<?php endforeach; endif; unset($_from); ?>
</div>
<div class="detailbox mt15">
	<h3>同价位推荐</h3>
	<?php $_from = $this->_tpl_vars['samepricecars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['samepricecarlist']):
?>
	<div class="carlist clearfix mt10">
		<div class="carlist_left">
			<a href="index.php?m=cars&id=<?php echo $this->_tpl_vars['samepricecarlist']['p_id']; ?>
"><?php if ($this->_tpl_vars['samepricecarlist']['p_mainpic'] <> ''): ?><img src="<?php echo $this->_tpl_vars['samepricecarlist']['p_mainpic']; ?>
"/><?php else: ?>暂无图片<?php endif; ?></a>
		</div>
		<div class="carlist_right">
			<p class="f12 fb"><a href="index.php?m=cars&id=<?php echo $this->_tpl_vars['samepricecarlist']['p_id']; ?>
"><?php echo $this->_tpl_vars['samepricecarlist']['p_allname']; ?>
</a></p>
			<p>上牌日期：<?php echo $this->_tpl_vars['samepricecarlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['samepricecarlist']['p_month']; ?>
月</p>
			<p><span class="orange01 fr pr10 fb"><?php echo $this->_tpl_vars['samepricecarlist']['p_price']; ?>
</span><?php echo $this->_tpl_vars['samepricecarlist']['listtime']; ?>
</p>
		</div>
	</div>
	<?php endforeach; endif; unset($_from); ?>
</div>
<div id="foottel">
	<?php if ($this->_tpl_vars['cars']['uid'] == 0): ?>
		<div class="tel">
			<p>联系人：<span class="orange01"><?php echo $this->_tpl_vars['cars']['p_username']; ?>
</span></p>
			<p>电话：<span class="orange01"><?php echo $this->_tpl_vars['cars']['p_tel']; ?>
</span></p>
		</div>
		<div class="clickfoottel">
			<a href="tel://<?php echo $this->_tpl_vars['cars']['p_tel']; ?>
">电话咨询</a>
		</div>
	<?php else: ?>
		<div class="tel">
			<p>联系人：<span class="orange01"><?php echo $this->_tpl_vars['shop']['nicname']; ?>
</span></p>
			<p>电话：<span class="orange01"><?php echo $this->_tpl_vars['shop']['mobilephone']; ?>
</span></p>
		</div>
		<div class="clickfoottel">
			<a href="tel://<?php echo $this->_tpl_vars['shop']['mobilephone']; ?>
">电话咨询</a>
		</div>
	<?php endif; ?>
</div>
<!--主体-->
<!--底部--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "m/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--底部结束-->
</body>
</html>