<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\pp\PHPTutorial\WWW\tp\public/../application/index\view\cart\cart.html";i:1558692111;}*/ ?>
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
		<div class="fullwidth margin-bottom-20">
			<h1 class="text-center">我的购物车</h1>
			<p class="text-center">Lorem ipsum dolor sit amet ipsum dolor sit amet elit ipsum.</p>
			<hr class="break-small break-center">
		</div>
	</div>

	<!-- cart left and right -->
	<div class="line">

		<!-- cart left -->
		<form class="form-horizontal" action="cart.php?act=clear" method="post">
                      <table width="100%" id="cartlist">
                        <tr>
                            <th width="10%">选择</th>
                            <th width="30%">商品名称</th>
                            <th width="25%">商品缩略图</th>
                            <th width="15%">价格</th>
                            <th width="10%">数量</th>
                            <th width="10%">操作</th>
                        </tr>
                       <?php if(is_array($de) || $de instanceof \think\Collection || $de instanceof \think\Paginator): $i = 0; $__LIST__ = $de;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ctt): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><input type="checkbox" name="id[]" value="1" style="width:20px;height:20px;"/></td>
                            <td><?php echo $ctt['name']; ?></td>
                            <td><img src="/index/images/<?php echo $ctt['image']; ?>" style="width:160px; height:120px;"></td>
                            <td><?php echo $ctt['price']; ?></td>
                            <td><input type="text" style="width:50px;" value=<?php echo $ctt['num']; ?> name="num1" /></td>
                            <td><a href="<?php echo url('index/Cart/outcart',['id'=> $ctt['id']]); ?>" >删除</a></td>
                        </tr>
                 			 <?php endforeach; endif; else: echo "" ;endif; ?>
                        <tr class="tfooter">
                             <td colspan="4"></td>
                                <td colspan="2">
                                	<a href="<?php echo url('index/Cart/check'); ?>">
                                	<input type="button" value="收银台" id="pay"/>
                                	</a>
                                </td>
                               		
                                </tr>                       

                      </table>
                     
                </form>
		
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
