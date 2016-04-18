<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML>
<html>
<head>
<title>产品详情</title>
<link rel="Shortcut Icon" href="<?php echo IMG_PATH;?>admin_img/favicon.ico">
<meta http-equiv="refresh" content="300;url=<?php echo APP_PATH;?>index.php"/>
<link href="<?php echo APP_PATH;?>statics/xnn/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo APP_PATH;?>statics/xnn/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo APP_PATH;?>statics/xnn/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="<?php echo APP_PATH;?>statics/xnn/css/flexslider.css" type="text/css" media="screen" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="xnn product" />
<script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/easing.js"></script>

	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
</head>
<body>
<!--header start here-->
<div class="header" style="height:180px">
   <div class="container">
        <div class="header-main">
        	 <div class="logo">
			   <!--<a href="index.html"><img src="<?php echo APP_PATH;?>statics/xnn/images/logo.gif" alt=""></a>-->
			 </div>
            <div class="top-nav">
            	<span class="menu"> <img src="<?php echo APP_PATH;?>statics/xnn/images/icon.png" alt=""/></span>
				<div style="float: left;margin-left:-50px;margin-top:20px"><a href="<?php echo APP_PATH;?>index.php"><img style="max-width: 100%" src="<?php echo APP_PATH;?>statics/xnn/images/logo.png" /></a></div>
				<ul class="nav nav-pills nav-justified res">
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li ><a class="active" href="javascript:history.back()"><i class="glyphicon glyphicon-home"></i>返回</a></li>
				</ul>
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.res" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
			 </div>	
     <div class="clearfix"> </div>
   </div>	
 </div>
</div>
  <div style="height:230px"></div>
  <div class="container">
  		<div class="row">
  			<div class="col-xs-3"></div>
  			<div class="col-xs-6">
  			<img src="<?php echo $thumb;?>" class="img-responsive img-rounded" style="width:100%"/>
  			</div>
  			 <div class="col-xs-3"></div>

  		</div>
  		<div class="row">
  			<div class="col-xs-12" style="border:1px solid grey;height:500px;padding:10px">
  				<h3 style="text-align:center;"><?php echo $title;?></h3>
						<p style="text-indent:2em">
							<?php echo $content;?>
						</p>
  			</div>


  		</div>

  </div>
</div>
</body>
</html>