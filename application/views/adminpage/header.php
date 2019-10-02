<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Site title</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- css -->
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<header id="site-header">
		<nav class="navbar navbar-default" role="navigation" style="background: transparent">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?= base_url() ?>">Admin Panel</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
							<li><a  style="float: right;cursor:pointer "  onclick="BIP.changeContent.init(this)" data-method="getUpdatePasswordPage" modal-header="Şifre Değiştir" data-controller="User" is-modal="true" base_url="/" modal-name="modal" >Şifre Güncelle</a></li>
							<li><a href="<?= base_url('/index.php/logout') ?>">Çıkış</a></li>
						<?php else : ?>
							<li><a href="<?= base_url('/index.php/register') ?>">Kayıt Ol</a></li>
							<li><a href="<?= base_url('/index.php/login') ?>">Giriş</a></li>
						<?php endif; ?>
					</ul>
				</div><!-- .navbar-collapse -->
			</div><!-- .container-fluid -->
		</nav><!-- .navbar -->
	</header><!-- #site-header -->
	<div class="row" style="margin-bottom: 10px">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<ul class="nav nav-pills nav-justified">
				<li class="nav-item" style="    background: #f3f3f3;">
					<a class="nav-link active" href="Guess">Tahminler</a>
				</li>
				<li class="nav-item" style="    background: #f3f3f3;">
					<a class="nav-link" href="GuessUser">Kullanıcılar Sayfası</a>
				</li>
				<li class="nav-item" style="    background: #f3f3f3;">
					<a class="nav-link" href="News">Duyurular Sayfası</a>
				</li>
			</ul>

		</div>
		<div class="col-md-2"></div>
		<hr class="my-4">
	</div>

	<main id="site-content" role="main">
		
		<?php if (isset($_SESSION)) : ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php /*var_dump($_SESSION); */?>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		<?php endif; ?>
		
