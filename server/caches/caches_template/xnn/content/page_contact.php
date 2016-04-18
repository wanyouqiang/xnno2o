<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE HTML>
<html>

	<head>
		<title>联系我们</title>
		<link rel="Shortcut Icon" href="<?php echo IMG_PATH;?>admin_img/favicon.ico">
		<meta http-equiv="refresh" content="300;url=<?php echo APP_PATH;?>index.php"/>
		<link href="<?php echo APP_PATH;?>statics/xnn/css/mycss.css" type="text/css" rel="stylesheet"/>
		<link href="<?php echo APP_PATH;?>statics/xnn/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<script src="<?php echo APP_PATH;?>statics/xnn/js/jquery-1.11.0.min.js"></script>
		<link rel="stylesheet" href="<?php echo APP_PATH;?>statics/xnn/css/fakeloader.css">
		<link href="<?php echo APP_PATH;?>statics/xnn/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="<?php echo APP_PATH;?>statics/xnn/js/fakeloader.min.js"></script>
		<script type="application/x-javascript">
			addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			} >
		</script>
		<meta name="keywords" content="Coffee Bar Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"
		/>
		<script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/easing.js"></script>

		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".fakeloader").fakeLoader({
					timeToHide: 1200,
					bgColor: "#fff",
					imagePath: "<?php echo APP_PATH;?>statics/xnn/images/load_logo.gif"
				});
				$(".scroll").click(function(event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 1000);
				});
			});
		</script>
	</head>

	<body style="">
		<div class="fakeloader"></div>
		<!--  head start here -->
		<div class="header" style="height:180px">
			<div class="container">
				<div class="header-main">
					<div class="logo">
						<!--<a href="index.html"><img src="<?php echo APP_PATH;?>statics/xnn/images/logo.png" alt=""></a>-->
					</div>
					<div class="top-nav">
						<span class="menu"> <img src="<?php echo APP_PATH;?>statics/xnn/images/icon.png" alt=""/></span>
						<!-- <a href="<?php echo APP_PATH;?>index.php"><img src="<?php echo APP_PATH;?>statics/xnn/images/logo.gif" style="float:left;height:120px"/></a> -->
						<div style="float:left;margin-left:-50px;margin-top:20px"><a href="<?php echo APP_PATH;?>index.php"><img style="max-width: 100%" src="<?php echo APP_PATH;?>statics/xnn/images/logo.png" /></a></div>
						<ul class="nav nav-pills nav-justified res">
						<!-- <li><img src="<?php echo APP_PATH;?>statics/xnn/images/logo.gif" style="width:340px;height:120px"></li> -->
							<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=12" style="padding:32px"><i class="glyphicon glyphicon-star"> </i>关于喜农农</a></li>
							<li><a class="icon" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=11" style="padding:32px"><i class="glyphicon glyphicon-star"> </i>诚意推荐</a></li>
							<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=13" style="padding:32px"><i  class="glyphicon glyphicon-thumbs-up"> </i>商品列表</a></li>
							<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=15" style="padding:32px"><i class="glyphicon glyphicon-list-alt"> </i>精品活动</a></li>
							<li><a class="active" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=14" style="padding:32px"><i class="glyphicon glyphicon-envelope"> </i>联系我们</a></li>
						</ul>
						<!-- script-for-menu -->
						<script>
							$("span.menu").click(function() {
								$("ul.res").slideToggle(300, function() {
									// Animation complete.
								});
							});
						</script>
						<!-- /script-for-menu -->
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--header end here-->


		<!-- head end here  -->
		<div style="height:200px"></div>
		<h2 style="font-weight:bolder;text-align:center;color:#BA0C2F">联系我们</h2>
		<p style="text-align:center">地址：虹桥路2268号&nbsp;&nbsp;&nbsp;&nbsp; 联系电话：021-62376458&nbsp;&nbsp;&nbsp;&nbsp; 电子邮件：service@happyn2.com
		</p>
		<div class="container">
				<img src="<?php echo APP_PATH;?>statics/xnn/images/map.jpg"/ class="img-responsive">
		</div>
		<div class="back-logo">
			<a href="<?php echo APP_PATH;?>index.php">
				<div class="back-block">返回首页</div>	
			</a>
		</div>
	</body>

</html>
