<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?= $title ?></title>

	<link href="<?= base_url('assets/user/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/user/css/font-awesome.min.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/user/css/prettyPhoto.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/user/css/price-range.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/user/css/animate.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/user/css/main.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/user/css/responsive.css'); ?>" rel="stylesheet">
	<!-- Sweet Alert 2 -->
	<link rel="stylesheet" href="<?= base_url('assets/sweetalert2/sweetalert2.min.css'); ?>">
	<style>
		.swal2-popup {
			font-size: 1.6rem !important;
		}
	</style>

	<script defer type="text/javascript">
		var base_url = '<?= base_url() ?>';
		var site_url = '<?= site_url() ?>';
	</script>
</head>
<!--/head-->

<body>
	<header id="header">
		<!--header-->
		<div class="header_top">
			<!--header_top-->
			<div class="container">

			</div>
		</div>
		<!--/header_top-->



		<div class="header-bottom">
			<!--header-bottom-->
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
								<li><a href="<?= site_url('Home') ?>" class="<?= $home ?>">Home</a></li>
								<li><a href="<?= site_url('User/Contact') ?>" class="<?= $contact ?>">Contact</a></li>
								<li><a href="<?= site_url('User/About') ?>" class="<?= $about ?>">About Us</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!--/header-bottom-->
	</header>
	<!--/header-->