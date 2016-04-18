<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE HTML>
<html>

	<head>
		<meta http-equiv="Page-Enter" content="revealTrans(duration=3, transition=4)">
		<meta http-equiv="Page-Exit" content="revealTrans(duration=3, transition=5)">
		<title>关于喜农农</title>
		<link rel="Shortcut Icon" href="<?php echo IMG_PATH;?>admin_img/favicon.ico">
		<link href="<?php echo APP_PATH;?>statics/xnn/css/mycss.css" rel="stylesheet" type="text/css" />
		<!--<script>
//实现页面自动跳转
	    setTimeout(function(){
        location.href="<?php echo APP_PATH;?>index.php";
        },18000);
        </script>-->
		<meta http-equiv="refresh" content="300;url=<?php echo APP_PATH;?>index.php"/>
		<link rel="stylesheet" href="<?php echo APP_PATH;?>statics/xnn/css/fakeloader.css">
		<meta http-equiv="Page-Exit" content="revealTrans(duration=3, transition=5)">
		<link href="<?php echo APP_PATH;?>statics/xnn/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo APP_PATH;?>statics/xnn/js/jquery-1.11.0.min.js"></script>
		<!-- Custom Theme files -->
		<link href="<?php echo APP_PATH;?>statics/xnn/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		<!--Google Fonts-->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/easing.js"></script>
		<script src="<?php echo APP_PATH;?>statics/xnn/js/fakeloader.min.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				
				$(".scroll").click(function(event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 1000);
				});
			});
			
		</script>
		<script>
			// $(function(){
			// $(".fakeloader").fakeLoader({
			// 		timeToHide: 1200,
			// 		bgColor: "#fff",
			// 		imagePath: "<?php echo APP_PATH;?>statics/xnn/images/load_logo.gif"
			// 	});
			// });
		</script>
		<!-- //end-smoth-scrolling -->
	</head>

	<body>
	
	<div class="fakeloader"></div>
		<!--header start here-->
		<div class="header" style="height:180px">
			<div class="container">
				<div class="header-main">
					<div class="logo">
						<!--<a href="index.html"><img src="<?php echo APP_PATH;?>statics/xnn/images/logo.png" alt=""></a>-->
					</div>
					<div class="top-nav">
						<span class="menu"> <img src="<?php echo APP_PATH;?>statics/xnn/images/icon.png" alt=""/></span>
						<div style="float: left;margin-left:-50px;margin-top:20px"><a href="<?php echo APP_PATH;?>index.php"><img style="max-width: 100%" src="<?php echo APP_PATH;?>statics/xnn/images/logo.png" /></a></div>
						<!-- <a href="<?php echo APP_PATH;?>index.php"><img src="<?php echo APP_PATH;?>statics/xnn/images/logo.gif" style="float:left;height:120px"/></a> -->
						<ul class="nav nav-pills nav-justified res">
							<!-- <li><img src="<?php echo APP_PATH;?>statics/xnn/images/logo.gif"style="width:340px;height:120px"></li> -->
							<li><a class="active" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=12" style="padding:32px"><i class="glyphicon glyphicon-star"> </i>关于喜农农</a></li>
							<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=11" style="padding:32px"><i  class="glyphicon glyphicon-thumbs-up"> </i>诚意推荐</a></li>
							<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=13" style="padding:32px"><i class="glyphicon glyphicon-list-alt"> </i>商品列表</a></li>
							<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=15" style="padding: 32px"><i class="glyphicon glyphicon-picture"> </i>精品活动</a></li>
							<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=14" style="padding:32px"><i class="glyphicon glyphicon-envelope"> </i>联系我们</a></li>
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
		<!--about start here-->
		<!--
		<div class="about" style="margin-top:150px">
			<div class="container">
				<div class="about-main">
					<div class="about-top">
						<h3>关于喜农农</h3>
						<p>“喜农农”是上海农业展览馆为更好地服务三农，利用现有的品牌公信力优势，为传统的农产品营销转型创新、资源整合，打造的专业性、公益性、品牌性的农产品服务平台。</p>
					</div>
					<div class="about-wedo">
						<div class="col-md-4 about-top-img">
							<a href="#"><img src="<?php echo APP_PATH;?>statics/xnn/images/aboutxn.png" alt="" class="img-responsive"></a>
						</div>
						<div class="col-md-8 about-wedo-right">
							<h4><a href="#">汇集全国优质农产品电商的窗口 打造上海优质农产品营销的平台 </a></h4>
							<p>“喜农农”在上海农业展览馆内专设O2O体验店，提供永不落幕的优质农产品展销平台，为广大消费者提供更优惠、优质、便捷的农产品服务。</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		-->
	<div class="container" style="margin-top:200px">
		<div class="row">
			<div class="col-md-3"><img src="<?php echo APP_PATH;?>statics/xnn/images/aboutxn.png" class="img-responsive"></div>	
			<div class="col-md-9">
					<h1 align="center" style="color:#BA0C2F;font-weight:bolder">关于喜农农</h1>	
					<p>“喜农农”是上海农业展览馆为更好地服务三农，利用现有的品牌公信力优势，为传统的农产品营销转型创新、资源整合，打造的专业性、公益性、品牌性的农产品服务平台。</p>
					<br>
		<h4 align="center" style="color:#BA0C2F;font-weight:bolder">汇集全国优质农产品电商的窗口 打造上海优质农产品营销的平台 </h4>
	<p>“喜农农”在上海农业展览馆内专设O2O体验店，提供永不落幕的优质农产品展销平台，为广大消费者提供更优惠、优质、便捷的农产品服务。</p>	
			</div>	
		</div>	
	</div>	
		<!--footer end here-->
		<!-- ############################################返回按钮############################ -->
			<div class="back-logo">
			
			<a href="<?php echo APP_PATH;?>index.php">
				
				<!--<img src="<?php echo APP_PATH;?>statics/xnn/images/back.png" width="100px">-->
				<div class="back-block">返回首页</div>	
			</a>
		</div>
	</body>

</html>
