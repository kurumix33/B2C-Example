<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"D:\phpStudy\PHPTutorial\WWW\181010536\public/../application/index\view\index\index.html";i:1560471199;}*/ ?>
﻿<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="/index/css/myresponsee.css">
	<link rel="stylesheet" href="/index/css/style.css">
	<!--Favicon-->
	<link rel="shortcut icon" href="/index/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/index/img/favicon.ico" type="image/x-icon">
    <!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="/index/css/responsive.css" rel="stylesheet">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
  
<body class="size-1140">


<!-- HIDDEN PRODUCTS MENU END -->

<!-- |||||||||||||||||| page start ||||||||||||||||||| -->
<!-- ||||| --> <div id="page-main-content"> <!-- ||||| -->
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||| -->

<!-- HEADER START -->
<header> 
	
	
	<!-- navigation and logo -->
	<nav class="background-dark">
		<div class="line">
		    <!-- logo -->
			<div class="s-12 l-3">
				<div class="fullwidth">
				    
				</div>
			</div>
			
			<!-- navigation -->
			<div class="top-nav s-12 m-12 l-9">
				<a class="nav-text"></a>
				<ul class="right chevron">
					<li><a href="<?php echo url('index/Index/index'); ?>">首页</a></li>>
					<li><a href="<?php echo url('index/Shop/shop'); ?>">商品列表</a></li>
					<li><a href="<?php echo url('index/Cart/docart'); ?>">购物车</a></li>
					<li><a href="<?php echo url('index/Reg/reg'); ?>">会员注册</a></li>
					<li><a href="<?php echo url('index/Login/login'); ?>">会员登录</a></li>
					<li><a href="<?php echo url('index/Login/loginout'); ?>">退出登录</a></li>
				</ul>
			</div>
			
		</div>
	</nav>
</header>
<!-- HEADER END -->

<!-- SLIDESHOW START -->
<div class="carousel-fade-transition owl-carousel carousel-main">
	<!-- slide 1 -->
	<div class="item">
	    <!-- slideshow photo -->
		<div class="image-box">
			<div class="image">
				<img src="/index/img/slideshow/slide1.jpg" alt="">
			</div>
		</div>
		<!-- slideshow content -->
		<div class="carousel-content">
			<div class="content-center-vertical line">
				<div class="s-12 m-8 l-7">
					<h1 class="margin-bottom-10 animated-carousel-element">化妆，给你不一样的人生</h1>
					<p class="margin-bottom-30 animated-carousel-element slow"></p>
					<div class="animated-carousel-element">
						<a href="" class="slideshow-btn">立即购买
</a><a href="" class="slideshow-btn2">详细信息</a>
					</div>
				</div>                 
			</div>
		</div>
	</div>
	
	<!-- slide 2 -->
	<div class="item">
	    <!-- slideshow photo -->
	    <div class="image-box">
			<div class="image">
				<img src="/index/img/slideshow/slide1.jpg" alt="">
			</div>
		</div>
		<!-- slideshow content -->
		<div class="carousel-content">
			<div class="content-center-vertical line">
				<div class="s-12 m-8 l-7">
					<h1 class="margin-bottom-10 animated-carousel-element">化妆，给你不一样的人生</h1>
					<p class="margin-bottom-30 animated-carousel-element slow"></p>
					<div class="animated-carousel-element">
						<a href="" class="slideshow-btn">立即购买
</a><a href="" class="slideshow-btn2">详细信息</a>
					</div>
				</div>                 
			</div>
		</div>
	</div>
</div>
<!-- SLIDESHOW END -->


<!-- PRODUCTS TAB START -->
<div class="section">
	<div class="line">
	  <!-- heading -->
	  <h1 class="text-center"><span class="text-primary">我们的</span> 商品</h1>
	  <hr class="break-small break-center">
		<!-- products tabs start -->
		<div class="tabs">
			<!-- tab 1 start -->
			<div class="tab-item tab-active">
				<a class="tab-label active-btn">列表</a>
				<div class="tab-content">
					<div class="margin">
					<!-- Product 1 -->
					<?php if(is_array($in) || $in instanceof \think\Collection || $in instanceof \think\Paginator): $i = 0; $__LIST__ = $in;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$oi): $mod = ($i % 2 );++$i;?>
					<div class="s-12 m-4 l-3 margin-bottom-30">
						<div class="fullwidth">
							<figure class="imghvr-reveal-down">
								<img src="/uploads/20190518/<?php echo $oi['image']; ?>">
								<figcaption>
									<div class="product-hover-content">
										<div class="btn-box">
											<a href="<?php echo url('index/Product/product',['id'=>$oi['id']]); ?>" class="btn">Buy Now</a>
										</div>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="fullwidth">
							<h5><?php echo $oi['name']; ?></h5>
							<p class="text-center"><!-- <span class="strike"></span> --> &nbsp;&nbsp; <span class="text-primary"><?php echo $oi['price']; ?></span></p>
						</div>
					</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					<!-- Product 2 -->
					
					
					</div>
				</div>
			</div>
			<!-- tab 1 end -->

			
		</div>
		<!-- products tabs end -->
	</div>
</div>
<!-- PRODUCTS END -->


<!-- FOOTER START -->
<footer>
	

	<!-- footer bottom bar -->
	<div class="copyright">
	    <div class="line">
			<div class="margin">
				<!-- left -->
				<div class="s-12 m-12 l-8 footer-links">
					<ul class="footer-bar-links">
						<li><a href="">联系我们</a></li>
						<li><a href="">常见问题</a></li>
						<li><a href="">解答发货</a></li>
						<li><a href="">退货政策</a></li>
						<li><a href="">订单跟踪</a></li>
					</ul>
					<p>版权®2019.版权所有</p>
				</div>
				<!-- right -->
				<div class="s-12 m-12 l-4 payment-methods">
					<i class="fa fa-cc-visa fa-2x"></i>
					<i class="fa fa-cc-mastercard fa-2x"></i> 
					<i class="fa fa-cc-paypal fa-2x"></i>
					<i class="fa fa-credit-card fa-2x"></i>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- FOOTER END -->

<!-- |||||||||||| page end ||||||||||||| -->
<!-- ||||||||| --> </div> <!-- ||||||||| -->
<!-- |||||||||||| page end ||||||||||||| -->

<!-- jQuery Files -->
<script type="text/javascript" src="/index/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/index/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/index/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="/index/js/custom.js"></script>

</body>
</html>
