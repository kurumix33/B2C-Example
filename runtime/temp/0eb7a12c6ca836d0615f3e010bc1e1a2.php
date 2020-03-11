<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\pp\PHPTutorial\WWW\tp\public/../application/index\view\shop\shop.html";i:1558693446;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
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
				    <a href="index.html" class="logo"><img src="/index/img/logo.png" alt=""></a>
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

<!-- PAGE CONTENT START -->
<div class="section">
	<!-- heading and description -->
	<div class="line">
	  <div class="margin">
		<div class="fullwidth">
		  <h1 class="text-center">商品列表</h1>
		  <p class="text-center">Lorem ipsum dolor sit amet, consectetur elit. Nullam urna in consequat.</p>
		  <hr class="break-small break-center">
		</div>
	  </div>
	</div>
	
    <!-- products -->
	<div class="line">
		<div class="margin">
		    <!-- product 1 -->
		    <?php if(is_array($product) || $product instanceof \think\Collection || $product instanceof \think\Paginator): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$st): $mod = ($i % 2 );++$i;?>
			<div class="s-12 m-4 l-3 margin-bottom-30">
				<div class="margin">
					<div class="fullwidth">
						<figure class="imghvr-reveal-down">
							<img src="/uploads/20190518/<?php echo $st['image']; ?>">
							<figcaption>
								<div class="product-hover-content">
									<div class="btn-box">
										<a href="<?php echo url('index/Product/product',['id'=>$st['id']]); ?>" class="btn">Buy Now</a>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="fullwidth">
						<h5><?php echo $st['name']; ?></h5>
						<p class="text-center"><span class="strike"><?php echo $st['price']; ?></span> &nbsp;&nbsp; <span class="text-primary">$130.00</span></p>
					</div>
				</div>
			</div>
		    <!-- product 2 -->
						<?php endforeach; endif; else: echo "" ;endif; ?>
		    <!-- product 5 -->
		   
		 
		</div>
	</div>
</div>
<!-- PAGE CONTENT END -->

<!-- FOOTER START -->
<footer>
	

	<!-- footer bottom bar -->
	<div class="copyright">
	    <div class="line">
			<div class="margin">
				<!-- left -->
				<div class="s-12 m-12 l-8 footer-links">
					<ul class="footer-bar-links">
						<li><a href="">Contact Us</a></li>
						<li><a href="">Faqs</a></li>
						<li><a href="">Shipping</a></li>
						<li><a href="">Return Policy</a></li>
						<li><a href="">Order Tracking</a></li>
					</ul>
					<p>Copyright &copy; 2017.版权所有</p>
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
