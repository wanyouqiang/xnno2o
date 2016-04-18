<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML>
<html>
<head>
<link rel="Shortcut Icon" href="<?php echo IMG_PATH;?>admin_img/favicon.ico">
<title>商品列表</title>
<meta charset="utf-8"/>
<meta http-equiv="refresh" content="300;url=<?php echo APP_PATH;?>index.php"/>
<script>
//实现页面自动跳转
 //setTimeout(function(){
   //location.href="<?php echo APP_PATH;?>index.php";

  //  },18000);
</script>
<link href="<?php echo APP_PATH;?>statics/xnn/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo APP_PATH;?>statics/xnn/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->

<link rel="stylesheet" href="<?php echo APP_PATH;?>statics/xnn/css/fakeloader.css">
<link href="<?php echo APP_PATH;?>statics/xnn/css/mycss.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo APP_PATH;?>statics/xnn/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Coffee Bar Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/move-top.js"></script>
<script src="<?php echo APP_PATH;?>statics/xnn/js/fakeloader.min.js"></script>
<script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/easing.js"></script>
<script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/bootstrap.min.js"></script>

	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".fakeloader").fakeLoader({
					timeToHide: 1200,
					bgColor: "#fff",
					imagePath: "<?php echo APP_PATH;?>statics/xnn/images/load_logo.gif"
				});
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
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
				<!-- <a href="<?php echo APP_PATH;?>index.php"><img src="<?php echo APP_PATH;?>statics/xnn/images/logo.gif" style="float:left;height:120px"/></a> -->
				<div style="float: left;margin-left:-50px;margin-top:20px"><a href="<?php echo APP_PATH;?>index.php"><img style="max-width: 100%" src="<?php echo APP_PATH;?>statics/xnn/images/logo.png" /></a></div>
				<ul class="nav nav-pills nav-justified res">
					<!-- <li><img src="<?php echo APP_PATH;?>statics/xnn/images/logo.gif"style="width:340px;height:120px"></li> -->
					<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=12" style="padding:32px"><i class="glyphicon glyphicon-star"> </i>关于喜农农</a></li>
					<li ><a class="icon" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=11" style="padding:32px"><i class="glyphicon glyphicon-thumbs-up"> </i>诚意推荐</a></li>
					<li><a class="active" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=13" style="padding:32px"><i  class="glyphicon glyphicon-list-alt"> </i>商品列表</a></li>
					<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=15"  style="padding:32px"><i class="glyphicon glyphicon-picture"> </i>精品活动</a></li>
					<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=14"  style="padding:32px"><i class="glyphicon glyphicon-envelope"> </i>联系我们</a></li>
				</ul>
				<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.res" ).slideToggle( 300, function() {
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
	<div class="clearf"></div>
	<div class="height_px"></div>
	
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-2" style="padding-left: 0; padding-right: 0">
			<div class="nav nav-pills nav-stacked text-center">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cd609b7b9ac4fadeb42b5e7f97a5f535&action=category&catid=%24catid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
		      <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			   
				<li role="presentation" style="background-color: #ba0c2e;"><a href="<?php echo $r['url'];?>" style="color:white"><?php echo $r['catname'];?></a></li>
			    
			<?php $n++;}unset($n); ?>	
			 
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
		<div class="col-xs-9" style="padding-left: 60px">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fb060f238de5a54f6697ee1282ccad26&action=lists&catid=28&num=4&order=listorder+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 4;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'28','order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'28','order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
		     <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			 <a href="<?php echo $r['url'];?>">
			<div class="col-xs-6">
				<img class="thumbnail" src="<?php echo $r['thumb'];?>" width="100%" style="margin-bottom: 0;">
				<div class="alert alert-success text-center" role="alert" style="background-color: #ba0c2e; color: white"><?php echo $r['title'];?></div>
			</div>
			</a>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			
		</div>
	</div>


</div>
	<div class="clearf"></div>
	</div>
	<div style="clear:both"></div>
	<div style="width:300px;margin:0 auto;"><?php echo $pages;?></div>	

      <!--	
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-6">
	<nav>
         <ul class="pagination pagination-lg">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li>
               <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
               </a>
            </li>
         </ul>
     </nav>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
      -->
	<!--#######################################返回按钮##################################-->
		
		<div class="back-logo">
			
			<a href="<?php echo APP_PATH;?>index.php">
				
				<!--<img src="<?php echo APP_PATH;?>statics/xnn/images/back.png" width="100px">-->
				<div class="back-block">返回首页</div>	
			</a>
		</div>
	

</body>
</html>
