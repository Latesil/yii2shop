<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\ltAppAsset;
use app\assets\AppAsset;


AppAsset::register($this);
ltAppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Админ |  <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="/yii2shop/web/assets/a4929ec8/css/bootstrap.css" rel="stylesheet">
    <link href="/yii2shop/web/css/font-awesome.min.css" rel="stylesheet">
    <link href="/yii2shop/web/css/prettyPhoto.css" rel="stylesheet">
    <link href="/yii2shop/web/css/price-range.css" rel="stylesheet">
    <link href="/yii2shop/web/css/animate.css" rel="stylesheet">
    <link href="/yii2shop/web/css/main.css" rel="stylesheet">
    <link href="/yii2shop/web/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <?php $this->beginBody() ?>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
                                                    <a href="<?= \yii\helpers\Url::home() ?>"><?= Html::img('@web/images/home/logo.png', ['alt' => 'E-SHOPPER']) ?></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php if(!Yii::$app->user->isGuest): ?>
                                                                    <li><a href="<?= \yii\helpers\Url::to(['/site/logout']) ?>"><i class="fa fa-user"></i> <?= Yii::$app->user->identity['username'] ?></a></li>
                                                                <?php endif; ?>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="#" onclick="return getCart()"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?= \yii\helpers\Url::home() ?>" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Category<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?= yii\helpers\Url::to(['category/index']) ?>">List</a></li>
					<li><a href="<?= yii\helpers\Url::to(['category/create']) ?>">Add</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Products<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?= yii\helpers\Url::to(['product/index']) ?>">List</a></li>
                                    </ul>
                                </li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
                                                    <form method="get" action="<?= \yii\helpers\Url::to(['category/search']) ?>">
                                                        <input type="text" placeholder="Search" name="q">
                                                    </form>
							
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
        <?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
    <?php endif; ?>
        <div class="container">
<?= $content; ?>
        </div>
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="/yii2shop/images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="/yii2shop/images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="/yii2shop/images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="/yii2shop/images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="/yii2shop/images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
<style>
#yii-debug-toolbar-logo {
    position: fixed;
    right: 31px;
    bottom: 4px;
}

.yii-debug-toolbar {
    font: 11px Verdana, Arial, sans-serif;
    text-align: left;
    width: 96px;
    transition: width .3s ease;
    z-index: 1000000;
}

.yii-debug-toolbar_active {
    width: 100%;
}

.yii-debug-toolbar_position_top {
    margin: 0 0 20px 0;
    width: 100%;
}

.yii-debug-toolbar_position_bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    margin: 0;
}

.yii-debug-toolbar__bar {
    position: relative;
    padding: 0;
    font: 11px Verdana, Arial, sans-serif;
    text-align: left;
    overflow: hidden;
    box-sizing: content-box;

    background: rgb(255, 255, 255);
    background: -moz-linear-gradient(top, rgb(255, 255, 255) 0%, rgb(247, 247, 247) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgb(255, 255, 255) 0%, rgb(247, 247, 247) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgb(255, 255, 255) 0%, rgb(247, 247, 247) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f7f7f7', GradientType=0); /* IE6-9 */

    border: 1px solid rgba(0, 0, 0, 0.11);

    /* ensure debug toolbar text is displayed ltr even on rtl pages */
    direction: ltr;
}

.yii-debug-toolbar.yii-debug-toolbar_active:not(.yii-debug-toolbar_animating) .yii-debug-toolbar__bar {
    overflow: visible;
}
.yii-debug-toolbar:not(.yii-debug-toolbar_active) .yii-debug-toolbar__bar {
    height:40px;
}

.yii-debug-toolbar__bar:after {
    content: '';
    display: table;
    clear: both;
}

.yii-debug-toolbar__view {
    height: 0;
    overflow: hidden;
    background: white;
}

.yii-debug-toolbar__view iframe {
    margin: 0;
    padding: 0;
    padding-top: 10px;
    height: 100%;
    width: 100%;
    border: 0;
}

.yii-debug-toolbar_iframe_active .yii-debug-toolbar__view {
    height: 100%;
}

.yii-debug-toolbar_iframe_animating .yii-debug-toolbar__view {
    transition: height .3s ease;
}

.yii-debug-toolbar__block {
    float: left;
    margin: 0;
    border-right: 1px solid rgba(0, 0, 0, 0.11);
    padding: 4px 8px;
    line-height: 32px;
    white-space: nowrap;
}

.yii-debug-toolbar__block_active,
.yii-debug-toolbar__ajax:hover {
    background: rgb(247, 247, 247); /* Old browsers */
    background: -moz-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#e0e0e0', GradientType=0); /* IE6-9 */
}

.yii-debug-toolbar__block a {
    display: inline-block;
    text-decoration: none;
    color: black;
}

.yii-debug-toolbar__block img {
    vertical-align: middle;
}

.yii-debug-toolbar__label {
    display: inline-block;
    padding: 2px 4px;
    font-size: 12px;
    font-weight: normal;
    line-height: 14px;
    white-space: nowrap;
    vertical-align: baseline;
    color: #ffffff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    background-color: #999999;
    -webkit-border-radius: 3px;
       -moz-border-radius: 3px;
            border-radius: 3px;
}

.yii-debug-toolbar__label:empty {
    display: none;
}

a.yii-debug-toolbar__label:hover,
a.yii-debug-toolbar__label:focus {
    color: #ffffff;
    text-decoration: none;
    cursor: pointer;
}

.yii-debug-toolbar__label_important,
.yii-debug-toolbar__label_error {
    background-color: #b94a48;
}

.yii-debug-toolbar__label_important[href] {
    background-color: #953b39;
}

.yii-debug-toolbar__label_warning,
.yii-debug-toolbar__badge_warning {
    background-color: #f89406;
}

.yii-debug-toolbar__label_warning[href] {
    background-color: #c67605;
}

.yii-debug-toolbar__label_success {
    background-color: #468847;
}

.yii-debug-toolbar__label_success[href] {
    background-color: #356635;
}

.yii-debug-toolbar__label_info {
    background-color: #3a87ad;
}

.yii-debug-toolbar__label_info[href] {
    background-color: #2d6987;
}

.yii-debug-toolbar__label_inverse,
.yii-debug-toolbar__badge_inverse {
    background-color: #333333;
}

.yii-debug-toolbar__label_inverse[href],
.yii-debug-toolbar__badge_inverse[href] {
    background-color: #1a1a1a;
}

.yii-debug-toolbar__title {
    background: rgb(247, 247, 247); /* Old browsers */
    background: -moz-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#e0e0e0', GradientType=0); /* IE6-9 */
}

.yii-debug-toolbar__block_last{ /* creates space for .yii-debug-toolbar__toggle, .yii-debug-toolbar__external */
    width: 80px;
    height: 40px;
    float: left;
}

.yii-debug-toolbar__toggle,
.yii-debug-toolbar__external {
    cursor: pointer;
    position: absolute;

    width: 30px;
    height: 30px;
    font-size: 25px;
    font-weight: 100;
    line-height: 28px;
    color: #ffffff;
    text-align: center;

    opacity: 0.5;
    filter: alpha(opacity=50);

    transition: opacity .3s ease;
}

.yii-debug-toolbar__toggle:hover,
.yii-debug-toolbar__toggle:focus,
.yii-debug-toolbar__external:hover,
.yii-debug-toolbar__external:focus {
    color: #ffffff;
    text-decoration: none;
    opacity: 0.9;
    filter: alpha(opacity=90);
}

.yii-debug-toolbar__toggle-icon,
.yii-debug-toolbar__external-icon {
    display: inline-block;

    background-position: 50% 50%;
    background-repeat: no-repeat;
}

.yii-debug-toolbar__toggle {
    right: 10px;
    bottom: 4px;
}

.yii-debug-toolbar__toggle-icon {
    padding: 7px 0;
    width: 10px;
    height: 16px;
    background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNSIgaGVpZ2h0PSIxNSIgdmlld0JveD0iMCAwIDUwIDUwIj48cGF0aCBmaWxsPSIjNDQ0IiBkPSJNMTUuNTYzIDQwLjgzNmEuOTk3Ljk5NyAwIDAgMCAxLjQxNCAwbDE1LTE1YTEgMSAwIDAgMCAwLTEuNDE0bC0xNS0xNWExIDEgMCAwIDAtMS40MTQgMS40MTRMMjkuODU2IDI1LjEzIDE1LjU2MyAzOS40MmExIDEgMCAwIDAgMCAxLjQxNHoiLz48L3N2Zz4=');
    transition: -webkit-transform .3s ease-out;
    transition: transform .3s ease-out;
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}

.yii-debug-toolbar_active .yii-debug-toolbar__toggle-icon {
    -webkit-transform: rotate(0);
    transform: rotate(0);
}

.yii-debug-toolbar_iframe_active .yii-debug-toolbar__toggle-icon {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
}

.yii-debug-toolbar__external {
    display: none;
    right: 50px;
    bottom: 4px;
}

.yii-debug-toolbar_iframe_active .yii-debug-toolbar__external {
    display: block;
}

.yii-debug-toolbar__external-icon {
    padding: 8px 0;
    width: 14px;
    height: 14px;
    background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNSIgaGVpZ2h0PSIxNSIgdmlld0JveD0iMCAwIDUwIDUwIj48cGF0aCBmaWxsPSIjNDQ0IiBkPSJNMzkuNjQyIDkuNzIyYTEuMDEgMS4wMSAwIDAgMC0uMzgyLS4wNzdIMjguMTAzYTEgMSAwIDAgMCAwIDJoOC43NDNMMjEuNyAyNi43OWExIDEgMCAwIDAgMS40MTQgMS40MTVMMzguMjYgMTMuMDZ2OC43NDNhMSAxIDAgMCAwIDIgMFYxMC42NDZhMS4wMDUgMS4wMDUgMCAwIDAtLjYxOC0uOTI0eiIvPjxwYXRoIGQ9Ik0zOS4yNiAyNy45ODVhMSAxIDAgMCAwLTEgMXYxMC42NmgtMjh2LTI4aDEwLjY4M2ExIDEgMCAwIDAgMC0ySDkuMjZhMSAxIDAgMCAwLTEgMXYzMGExIDEgMCAwIDAgMSAxaDMwYTEgMSAwIDAgMCAxLTF2LTExLjY2YTEgMSAwIDAgMC0xLTF6Ii8+PC9zdmc+');
}

.yii-debug-toolbar__ajax {
    position: relative;
}

.yii-debug-toolbar__ajax:hover .yii-debug-toolbar__ajax_info,
.yii-debug-toolbar__ajax:focus .yii-debug-toolbar__ajax_info {
    visibility: visible;
}
.yii-debug-toolbar__ajax_info {
    visibility: hidden;
    transition: visibility .2s linear;
    background-color: white;
    box-shadow: inset 0 -10px 10px -10px #e1e1e1;
    position: absolute;
    bottom: 40px;
    left: -1px;
    padding: 10px;
    max-width: 480px;
    max-height: 480px;
    word-wrap: break-word;
    overflow: hidden;
    overflow-y: auto;
    box-sizing: border-box;
    border: 1px solid rgba(0, 0, 0, 0.11);
    z-index: 1000001;
}
.yii-debug-toolbar__ajax a {
    color: #337ab7;
}
.yii-debug-toolbar__ajax table {
    width: 100%;
    table-layout: auto;
    border-spacing: 0;
    border-collapse: collapse;
}
.yii-debug-toolbar__ajax table td {
    padding: 4px;
    font-size: 12px;
    line-height: normal;
    vertical-align: top;
    border-top: 1px solid #ddd;
}
.yii-debug-toolbar__ajax table th {
    padding: 4px;
    font-size: 11px;
    line-height: normal;
    vertical-align: bottom;
    border-bottom: 2px solid #ddd;
}
.yii-debug-toolbar__ajax_request_status {
    color: white;
    padding: 2px 5px;
}
.yii-debug-toolbar__ajax_request_url {
    max-width: 170px;
    overflow: hidden;
    text-overflow: ellipsis;
}</style><script>(function () {
    'use strict';

    var findToolbar = function () {
            return document.querySelector('#yii-debug-toolbar');
        },
        ajax = function (url, settings) {
            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            settings = settings || {};
            xhr.open(settings.method || 'GET', url, true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.setRequestHeader('Accept', 'text/html');
            xhr.onreadystatechange = function (state) {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200 && settings.success) {
                        settings.success(xhr);
                    } else if (xhr.status != 200 && settings.error) {
                        settings.error(xhr);
                    }
                }
            };
            xhr.send(settings.data || '');
        },
        url,
        div,
        toolbarEl = findToolbar(),
        toolbarAnimatingClass = 'yii-debug-toolbar_animating',
        barSelector = '.yii-debug-toolbar__bar',
        viewSelector = '.yii-debug-toolbar__view',
        blockSelector = '.yii-debug-toolbar__block',
        toggleSelector = '.yii-debug-toolbar__toggle',
        externalSelector = '.yii-debug-toolbar__external',

        CACHE_KEY = 'yii-debug-toolbar',
        ACTIVE_STATE = 'active',

        animationTime = 300,

        activeClass = 'yii-debug-toolbar_active',
        iframeActiveClass = 'yii-debug-toolbar_iframe_active',
        iframeAnimatingClass = 'yii-debug-toolbar_iframe_animating',
        titleClass = 'yii-debug-toolbar__title',
        blockClass = 'yii-debug-toolbar__block',
        blockActiveClass = 'yii-debug-toolbar__block_active',
        requestStack = [];

    if (toolbarEl) {
        url = toolbarEl.getAttribute('data-url');

        ajax(url, {
            success: function (xhr) {
                div = document.createElement('div');
                div.innerHTML = xhr.responseText;

                toolbarEl.parentNode && toolbarEl.parentNode.replaceChild(div, toolbarEl);

                showToolbar(findToolbar());
            },
            error: function (xhr) {
                toolbarEl.innerHTML = xhr.responseText;
            }
        });
    }

    function showToolbar(toolbarEl) {
        var barEl = toolbarEl.querySelector(barSelector),
            viewEl = toolbarEl.querySelector(viewSelector),
            toggleEl = toolbarEl.querySelector(toggleSelector),
            externalEl = toolbarEl.querySelector(externalSelector),
            blockEls = barEl.querySelectorAll(blockSelector),
            iframeEl = viewEl.querySelector('iframe'),
            iframeHeight = function () {
                return (window.innerHeight * 0.7) + 'px';
            },
            isIframeActive = function () {
                return toolbarEl.classList.contains(iframeActiveClass);
            },
            showIframe = function (href) {
                toolbarEl.classList.add(iframeAnimatingClass);
                toolbarEl.classList.add(iframeActiveClass);

                iframeEl.src = externalEl.href = href;
                viewEl.style.height = iframeHeight();
                setTimeout(function() {
                    toolbarEl.classList.remove(iframeAnimatingClass);
                }, animationTime);
            },
            hideIframe = function () {
                toolbarEl.classList.add(iframeAnimatingClass);
                toolbarEl.classList.remove(iframeActiveClass);
                removeActiveBlocksCls();

                externalEl.href = '#';
                viewEl.style.height = '';
                setTimeout(function() {
                    toolbarEl.classList.remove(iframeAnimatingClass);
                }, animationTime);
            },
            removeActiveBlocksCls = function () {
                [].forEach.call(blockEls, function (el) {
                    el.classList.remove(blockActiveClass);
                });
            },
            toggleToolbarClass = function (className) {
                toolbarEl.classList.add(toolbarAnimatingClass);
                if (toolbarEl.classList.contains(className)) {
                    toolbarEl.classList.remove(className);
                } else {
                    toolbarEl.classList.add(className);
                }
                setTimeout(function () {
                    toolbarEl.classList.remove(toolbarAnimatingClass);
                }, animationTime);
            },
            toggleStorageState = function (key, value) {
                if (window.localStorage) {
                    var item = localStorage.getItem(key);

                    if (item) {
                        localStorage.removeItem(key);
                    } else {
                        localStorage.setItem(key, value);
                    }
                }
            },
            restoreStorageState = function (key) {
                if (window.localStorage) {
                    return localStorage.getItem(key);
                }
            },
            togglePosition = function () {
                if (isIframeActive()) {
                    hideIframe();
                } else {
                    toggleToolbarClass(activeClass);
                    toggleStorageState(CACHE_KEY, ACTIVE_STATE);
                }
            };

        toolbarEl.style.display = 'block';

        if (restoreStorageState(CACHE_KEY) == ACTIVE_STATE) {
            toolbarEl.classList.add(activeClass);
        }

        window.onresize = function () {
            if (toolbarEl.classList.contains(iframeActiveClass)) {
                viewEl.style.height = iframeHeight();
            }
        };

        barEl.onclick = function (e) {
            var target = e.target,
                block = findAncestor(target, blockClass);

            if (block && !block.classList.contains(titleClass)
                && e.which !== 2 && !e.ctrlKey // not mouse wheel and not ctrl+click
            ) {
                while (target !== this) {
                    if (target.href) {
                        removeActiveBlocksCls();
                        block.classList.add(blockActiveClass);
                        showIframe(target.href);
                    }
                    target = target.parentNode;
                }

                e.preventDefault();
            }
        };

        toggleEl.onclick = togglePosition;
    }

    function findAncestor(el, cls) {
        while ((el = el.parentElement) && !el.classList.contains(cls));
        return el;
    }

    function renderAjaxRequests() {
        var requestCounter = document.getElementsByClassName('yii-debug-toolbar__ajax_counter');
        if (!requestCounter.length) {
            return;
        }
        var ajaxToolbarPanel = document.querySelector('.yii-debug-toolbar__ajax');
        var tbodies = document.getElementsByClassName('yii-debug-toolbar__ajax_requests');
        var state = 'ok';
        if (tbodies.length) {
            var tbody = tbodies[0];
            var rows = document.createDocumentFragment();
            if (requestStack.length) {
                var firstItem = requestStack.length > 20 ? requestStack.length - 20 : 0;
                for (var i = firstItem; i < requestStack.length; i++) {
                    var request = requestStack[i];
                    var row = document.createElement('tr');
                    rows.appendChild(row);

                    var methodCell = document.createElement('td');
                    methodCell.innerHTML = request.method;
                    row.appendChild(methodCell);

                    var statusCodeCell = document.createElement('td');
                    var statusCode = document.createElement('span');
                    if (request.statusCode < 300) {
                        statusCode.setAttribute('class', 'yii-debug-toolbar__ajax_request_status yii-debug-toolbar__label_success');
                    } else if (request.statusCode < 400) {
                        statusCode.setAttribute('class', 'yii-debug-toolbar__ajax_request_status yii-debug-toolbar__label_warning');
                    } else {
                        statusCode.setAttribute('class', 'yii-debug-toolbar__ajax_request_status yii-debug-toolbar__label_error');
                    }
                    statusCode.textContent = request.statusCode || '-';
                    statusCodeCell.appendChild(statusCode);
                    row.appendChild(statusCodeCell);

                    var pathCell = document.createElement('td');
                    pathCell.className = 'yii-debug-toolbar__ajax_request_url';
                    pathCell.innerHTML = request.url;
                    pathCell.setAttribute('title', request.url);
                    row.appendChild(pathCell);

                    var durationCell = document.createElement('td');
                    durationCell.className = 'yii-debug-toolbar__ajax_request_duration';
                    if (request.duration) {
                        durationCell.innerText = request.duration + " ms";
                    } else {
                        durationCell.innerText = '-';
                    }
                    row.appendChild(durationCell);
                    row.appendChild(document.createTextNode(' '));

                    var profilerCell = document.createElement('td');
                    if (request.profilerUrl) {
                        var profilerLink = document.createElement('a');
                        profilerLink.setAttribute('href', request.profilerUrl);
                        profilerLink.innerText = request.profile;
                        profilerCell.appendChild(profilerLink);
                    } else {
                        profilerCell.innerText = 'n/a';
                    }
                    row.appendChild(profilerCell);

                    if (request.error) {
                        if (state !== "loading" && i > requestStack.length - 4) {
                            state = 'error';
                        }
                    } else if (request.loading) {
                        state = 'loading'
                    }
                    row.className = 'yii-debug-toolbar__ajax_request';
                }
                while (tbody.firstChild) {
                    tbody.removeChild(tbody.firstChild);
                }
                tbody.appendChild(rows);
            }
            ajaxToolbarPanel.style.display = 'block';
        }
        requestCounter[0].innerText = requestStack.length;
        var className = 'yii-debug-toolbar__label yii-debug-toolbar__ajax_counter';
        if (state == 'ok') {
            className += ' yii-debug-toolbar__label_success';
        } else if (state == 'error') {
            className += ' yii-debug-toolbar__label_error';
        }
        requestCounter[0].className = className;
    };

    var proxied = XMLHttpRequest.prototype.open;

    XMLHttpRequest.prototype.open = function (method, url, async, user, pass) {
        var self = this;
        /* prevent logging AJAX calls to static and inline files, like templates */
        if (url.substr(0, 1) === '/' && !url.match(new RegExp("{{ excluded_ajax_paths }}"))) {
            var stackElement = {
                loading: true,
                error: false,
                url: url,
                method: method,
                start: new Date()
            };
            requestStack.push(stackElement);
            this.addEventListener("readystatechange", function () {
                if (self.readyState == 4) {
                    stackElement.duration = self.getResponseHeader("X-Debug-Duration") || new Date() - stackElement.start;
                    stackElement.loading = false;
                    stackElement.statusCode = self.status;
                    stackElement.error = self.status < 200 || self.status >= 400;
                    stackElement.profile = self.getResponseHeader("X-Debug-Tag");
                    stackElement.profilerUrl = self.getResponseHeader("X-Debug-Link");
                    renderAjaxRequests();
                }
            }, false);
            renderAjaxRequests();
        }
        proxied.apply(this, Array.prototype.slice.call(arguments));
    };

})();</script><script src="/yii2shop/web/assets/577ee0d/jquery.js"></script>
<script src="/yii2shop/web/assets/c8bcb8aa/yii.js"></script>
<script src="/yii2shop/web/assets/a4929ec8/js/bootstrap.js"></script>
<script src="/yii2shop/web/js/jquery.scrollUp.min.js"></script>
<script src="/yii2shop/web/js/price-range.js"></script>
<script src="/yii2shop/web/js/jquery.prettyPhoto.js"></script>
<script src="/yii2shop/web/js/main.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
jQuery('#cart').modal({"show":false});
});</script>
</body>
</html>
<?php $this->endPage() ?>