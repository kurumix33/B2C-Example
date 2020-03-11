<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"D:\phpStudy\PHPTutorial\WWW\181010536\public/../application/index\view\product\product.html";i:1558693432;}*/ ?>
﻿<!DOCTYPE html>
<html lang="zxx">
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
			</div>
			
		</div>
	</nav>
</header>
<!-- HEADER END -->

<!-- PRODUCT DETAIL START -->
<div class="section"> 
	<div class="line">
		<div class="margin">
			<!-- product image -->
			<?php if(is_array($de) || $de instanceof \think\Collection || $de instanceof \think\Paginator): $i = 0; $__LIST__ = $de;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tt): $mod = ($i % 2 );++$i;?>
			<div class="s-12 m-4 l-5 margin-bottom">
			<img src="/uploads/20190518/<?php echo $tt['image']; ?>" alt="">
			</div>
			<!-- product detail -->
			<div class="s-12 m-8 l-7 padding-l-left">
				<h2 class="text-primary">商品名称：<?php echo $tt['name']; ?></h2>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam molestie urna in massa consequat, sit amet malesuada sapien consectetur. Praesent ut consectetur felis, in dapibus metus nullaml aoreet.
				</p>
				<ul class="speciality margin-bottom">
						<li>商品价格：<?php echo $tt['price']; ?></li>
<!-- 						<li>Ipsum dolor sit amet consectetur</li>
						<li>Lorem ipsum dolor amet consectetur</li> -->
					</ul>
				<div class="fullwidth margin-bottom-40">
					<div class="numbers-row">
						<label>Quantity:</label>
					<form method="post" action="<?php echo url('index/Cart/cart'); ?>">
						<input type="number" name="quanity" class="quantity" id="french-hens" value="1">
					</div>
				</div>
				<div class="s-12 m-6 l-4">
					
					<button  class="button">加入购物车</button>
				</div>
			</div>
			
				<input type="hidden" name="name" value=<?php echo $tt['name']; ?>>
				<input type="hidden" name="price" value=<?php echo $tt['price']; ?>>
				<input type="hidden" name="img" value=<?php echo $tt['image']; ?>>
			</form>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
</div>
<!-- PRODUCT DETAIL END -->




<!-- PRODUCT TAB START -->
<div class="section padding-top-0">
	<div class="line">
		<div class="fullwidth">
			<div class="tabs left">
				<div class="tab-item tab-active">
					<a class="tab-label active-btn">产品详情</a>
					<div class="tab-content padding-left-10">
						<h3>Description</h3>
						<p>Lorem ipsum dolor mollis hendrerit ante, sit amet sollicitudin urna varius in. Vestibulum mattis, lectus in dictum pretium, lacus ex consequat metus, id porttitor felis magna eu justo. Suspendisse dolor lacus, posuere venenatis nunc quis, ornare venenatis est. Suspendisse laoreet erat sit amet sodales semper. Mauris cursus lorem turpis, eget accumsan erat consequat molestie. Donec id nibh accumsan, egestas nulla sed, iaculis mauris.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut interdum scelerisque dolor sit amet porta. Nam est elit, dignissim et suscipit semper, viverra at velit. Fusce suscipit arcu non velit suscipit posuere. Ut mollis hendrerit ante, sit amet sollicitudin urna varius in. Vestibulum mattis, lectus in dictum pretium.</p>
					</div>  
				</div>
				<div class="tab-item">
					<a class="tab-label">Speciality</a>        
					<div class="tab-content padding-left-10">
						<h3>Speciality</h3>
						<p class="margin-bottom">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
						<ul class="speciality padding padding-top-0">
							<li>Lorem ipsum dolor sit amet consectetur</li>
							<li>Ipsum dolor sit amet consectetur</li>
							<li>Lorem ipsum dolor amet consectetur</li>
						</ul>
					</div>  
				</div>
				<div class="tab-item">
					<a class="tab-label">Shipping Charges</a>
					<div class="tab-content padding-left-10">
						<h3>Shipping Charges</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					</div>  
				</div>
			</div>
		</div>
	</div>
</div>
<!-- PRODUCT TAB END -->






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
