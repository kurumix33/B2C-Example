<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\pp\PHPTutorial\WWW\tp\public/../application/index\view\reg\reg.html";i:1558691968;}*/ ?>
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
				    <a href="index.html" class="logo"><img src="img/logo.png" alt=""></a>
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
	<div class="line">
		<div class="margin">
			<div class="s-12 m-12 l-4 margin-bottom-30">
				<div class="fullwidth margin-bottom-40">
					<h2>公司信息</h2>
					<hr class="break-small">
					<p>Lorem ipsum dolor sit elit.</p>
				</div>
				<div class="fullwidth margin-bottom-50">
					<div class="float-left">
						<i class="fa fa-home text-white background-primary icon-square-small"></i>
					</div>
					<div class="margin-left-100">
						<h4 class="text-primary">Address</h4>
						<p>
						Xyz Street 7<br />
						P.O.Box: 12345
						</p>               
					</div>
				</div>
				<div class="fullwidth margin-bottom-50">
					<div class="float-left">
						<i class="fa fa-phone icon-square-small"></i>
					</div>
					<div class="margin-left-100">
						<h4 class="text-primary">Calls</h4>
						<p>
						0000 1234 567 89<br />
						0000 1234 567 89
						</p>             
					</div>
				</div>
				<div class="fullwidth margin-m-bottom-60">
					<div class="float-left">
						<i class="fa fa-envelope text-white background-primary icon-square-small"></i>
					</div>
					<div class="margin-left-100">
						<h4 class="text-primary">Emails</h4>
						<p>
						xyz@yourwebsite.com<br />
						xyz@yourwebsite.com
						</p>              
					</div>
				</div>
			</div>
			<div class="s-12 m-12 l-8">
			    <div class="padding-m-s-left-50">
				<div class="fullwidth margin-bottom-40">
					<h2>会员注册</h2>
					<hr class="break-small">
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
				</div>
				<form class="customform" name="contact-us-form" method="post" action="<?php echo url('index/Reg/doreg'); ?>">
					<div class="margin">
						<div class="s-12 m-6 l-6">
							<input type="text" name="user" placeholder="账号" title="账号" required />
						</div>
						
					</div>
					<div class="margin">
						<div class="s-12 m-6 l-6">
							<input type="password" name="pass" placeholder="密码" title="密码" required />
						</div>
						<div class="s-12 m-6 l-6">
							<input type="password" name="repass" placeholder="确认密码" title="确认密码" />
						</div>
					</div>
					<div class="margin">
						<div class="s-12 m-6 l-6">
							<input type="text" name="realname" placeholder="联系人" title="联系人" required />
						</div>
						<div class="s-12 m-6 l-6">
							<input type="text" name="phone" placeholder="联系电话" title="联系电话" />
						</div>
					</div>
					<div class="fullwidth">
						<textarea name="addr" placeholder="联系地址" rows="2" required></textarea>
					</div>
					<div class="fullwidth">
						<input type="submit" value="立即注册">
					</div> 
				</form>
			    </div>
			</div>
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
