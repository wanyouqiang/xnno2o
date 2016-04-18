<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML>
<html>
	<head>
		<style>
		*{font-family:'Microsoft YaHei';font-weight:bolder}
		</style>
		<link rel="stylesheet" type="text/css" media="only screen and (max-width: 480px),only screen and (max-device-width: 480px)" href="link.css" rel="external nofollow" />
		<link rel="Shortcut Icon" href="<?php echo IMG_PATH;?>admin_img/favicon.ico">
		<link href="<?php echo APP_PATH;?>statics/xnn/css/mycss.css" rel="stylesheet" type="text/css" media="all"/>
		<meta http-equiv="Page-Enter" content="revealTrans(duration=3, transition=4)">
		<meta http-equiv="Page-Exit" content="revealTrans(duration=3, transition=5)">
		<title>喜农农首页</title>
		<meta http-equiv="Page-Exit" content="revealTrans(duration=3, transition=5)">
		<link href="<?php echo APP_PATH;?>statics/xnn/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo APP_PATH;?>statics/xnn/js/jquery-1.11.0.min.js"></script>
		<!-- Custom Theme files -->
		<link href="<?php echo APP_PATH;?>statics/xnn/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="<?php echo APP_PATH;?>statics/xnn/css/flexslider.css" type="text/css" media="screen" />
		<!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript">
			addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
			$(function(){
			      
			});
		</script>
		<meta name="keywords" content="Coffee Bar Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"
		/>
		<!--Google Fonts-->
		<!--<link href='http://fonts.useso.com/css?family=Ropa+Sans:400,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.useso.com/css?family=Courgette' rel='stylesheet' type='text/css'>-->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/easing.js"></script>
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
		<!-- //end-smoth-scrolling -->
		<!--载入效果  start -->

		<link rel="stylesheet" href="<?php echo APP_PATH;?>statics/xnn/css/fakeloader.css">
		<!--<script src="<?php echo APP_PATH;?>statics/xnn/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
		<!--载入效果  END -->
	</head>

	<body>
		
		<!--载入效果  start -->
		<div class="fakeloader"></div>
		
		<script src="<?php echo APP_PATH;?>statics/xnn/js/jquery.min.js"></script>
		<script src="<?php echo APP_PATH;?>statics/xnn/js/fakeloader.min.js"></script>
		<script>
			$(document).ready(function() {
				$(".fakeloader").fakeLoader({
					timeToHide: 1200,
					bgColor: "#fff",
					imagePath: "<?php echo APP_PATH;?>statics/xnn/images/load_logo.gif"
				});
			});
		</script>
		<!--载入效果  END -->
		<!--header start here-->
		
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
							<li><a class="icon" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=11" style="padding:32px"><i class="glyphicon glyphicon-thumbs-up"> </i>诚意推荐</a></li>
							<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=13" style="padding:32px"><i  class="glyphicon glyphicon-list-alt"> </i>商品列表</a></li>
							<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=15" style="padding:32px"><i class="glyphicon glyphicon-picture"> </i>精品活动</a></li>
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

		<!--banner info start here-->
		<div class="bann-info" style="margin-top:150px;">
			<div class="container">
				<div class="bann-info-main">
					<a id="imgOne" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=11">
						<div class="col-md-4 bann-info-grid">
							<div class="thumb">
							
						<!-- <img src="<?php echo $CATEGORYS['20']['image'];?>" alt="" class="img-responsive"> -->
			<div id="focus">					
				<div id="focus_bg"></div>
				<div id="focus_show"></div>
				<div id="focus_img">
				    <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=11">
					<div name="focus_img" id="focus_1"><?php echo $CATEGORYS['20']['image'];?></div>
					<div name="focus_img" id="focus_2"><?php echo $CATEGORYS['21']['image'];?></div>
					</a>
				</div>
				</div>
	
	
								<em></em>
							<div class="ban-info-details">
								<h3>诚意推荐</h3>
								<p>我们精挑细选，只为有品味的你！</p>
							</div>
							</div>
						</div>
					</a>
					<a id="imgTwo" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=13">
						<div class="col-md-4 bann-info-grid">
								<div class="thumb">
							<!-- <img src="<?php echo $CATEGORYS['13']['image'];?>" alt="" class="img-responsive"> -->
								<div id="focus2">					
		<div id="focus_bg2"></div>
		<div id="focus_show2"></div>
		<div id="focus_img2">
		   <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=13">
			<div name="focus_img2" id="focus2_1"><?php echo $CATEGORYS['23']['image'];?></div>
			<div name="focus_img2" id="focus2_2"><?php echo $CATEGORYS['24']['image'];?></div>
			</a>
		</div>
		</div>
								<em></em>
								
							<div class="ban-info-details">
								<h3>商品列表</h3>
								<p>网罗各地精口，提供优势农产品</p>
							</div>
							</div>
						</div>
					</a>
					<a id="imgThree" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=15">
						<div class="col-md-4 bann-info-grid">
							<div class="thumb">
							<!-- <img src="<?php echo $CATEGORYS['15']['image'];?>" alt="" class="img-responsive"> -->
						<div id="focus3">					
						<div id="focus_bg3"></div>
						<div id="focus_show3"></div>
						<div id="focus_img3">
						   <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=15">
							<div name="focus_img3" id="focus3_1"><?php echo $CATEGORYS['26']['image'];?></div>
							
							<div name="focus_img3" id="focus3_2"><?php echo $CATEGORYS['27']['image'];?></div>
							<a>
						</div>
						</div>
							<em></em>
							
							<div class="ban-info-details">
								<h3>精品活动</h3>
								<p>让你第一时间了解活动信息</p>
							</div>
							</div>
						</div>
					</a>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/focus.js"></script>
		<script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/focus2.js"></script>
	    <script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/focus3.js"></script>

		<!--banner info end here-->
		<!-- ################################################################################# -->
		<!-- ############################################################################ -->
<style type="text/css">




#focus{width:380px;height:360px;margin:0 auto;}
#focus div{position:absolute;width:380px;height:360px;overflow:hidden;}
#focus img{width:380px;height:360px;}
#focus #focus_img{display:none;}
/* ###################################### */




#focus2{width:380px;height:360px;margin:0 auto;}
#focus2 div{position:absolute;width:380px;height:360px;overflow:hidden;}
#focus2 img{width:380px;height:360px;}
#focus2 #focus_img2{display:none;}
/* ################################## */




#focus3{width:380px;height:360px;margin:0 auto;}
#focus3 div{position:absolute;width:380px;height:360px;overflow:hidden;}
#focus3 img{width:380px;height:360px;}
#focus3 #focus_img3{display:none;}
</style>
	</body>

</html>