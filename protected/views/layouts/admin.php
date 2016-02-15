<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min_2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min_2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/icon-font.min_2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/animate_2.css" media="all">

	<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

</head> 
   
<body class="sticky-header left-side-collapsed">
	
	<section>

		<!-- left side menu start -->
		<div class="left-side sticky-left-side">
			<div class="logo">
				<h1><a href="<?php echo Yii::app()->createUrl('site/admin'); ?>">Admin <span>Page</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="<?php echo Yii::app()->createUrl('site/admin'); ?>"><i class="lnr lnr-home"></i></a>
			</div>
			<div class="left-side-inner">
				<ul class="nav nav-pills nav-stacked custom-nav">
					<li class="active"><a href="<?php echo Yii::app()->createUrl('site/admin'); ?>"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
					<li><a href="<?php echo Yii::app()->createUrl(''); ?>" target="blank"><i class="lnr lnr-eye"></i><span>View Website</span></a></li>
					<li class="menu-list"><a href="#"><i class="lnr lnr-screen"></i><span>Slider</span></a>
						<ul class="sub-menu-list">
							<li><a href="<?php echo Yii::app()->createUrl('slider/create'); ?>">Create</a></li>
							<li><a href="<?php echo Yii::app()->createUrl('slider/admin'); ?>">Manage</a></li>
						</ul>
					</li>
					<li class="menu-list"><a href="#"><i class="lnr lnr-book"></i><span>Pages</span></a>
						<ul class="sub-menu-list">
							<li><a href="<?php echo Yii::app()->createUrl('pages/create'); ?>">Create</a></li>
							<li><a href="<?php echo Yii::app()->createUrl('pages/admin'); ?>">Manage</a></li>
						</ul>
					</li>
					<li class="menu-list"><a href="#"><i class="lnr lnr-briefcase"></i><span>Portfolio</span></a>
						<ul class="sub-menu-list">
							<li><a href="<?php echo Yii::app()->createUrl('portfolio/create'); ?>">Create</a></li>
							<li><a href="<?php echo Yii::app()->createUrl('portfolio/admin'); ?>">Manage</a></li>
						</ul>
					</li>
					<?php /*<li><a href="<?php echo Yii::app()->createUrl('comments/admin'); ?>"><i class="lnr lnr-bubble"></i><span>Comments</span></a></li>*/ ?>
					<li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i><span>Contact</span></a>
						<ul class="sub-menu-list">
							<li><a href="<?php echo Yii::app()->createUrl('contact/admin'); ?>">Inbox</a></li>
						</ul>
					</li>
					<li class="menu-list"><a href="#"><i class="lnr lnr-user"></i><span>User</span></a>
						<ul class="sub-menu-list">
							<li><a href="<?php echo Yii::app()->createUrl('user/create'); ?>">Create</a></li>
							<li><a href="<?php echo Yii::app()->createUrl('user/admin'); ?>">Manage</a></li>
						</ul>
					</li>
					<li class="menu-list"><a href="#"><i class="lnr lnr-flag"></i><span>Translation</span></a>
						<ul class="sub-menu-list">
							<li><a href="<?php echo Yii::app()->createUrl('translate/edit/admin'); ?>">Manage</a></li>
							<li><a href="<?php echo Yii::app()->createUrl('translate/edit/missing'); ?>">Missing</a></li>
						</ul>
					</li>
					<li><a href="<?php echo Yii::app()->createUrl('gii'); ?>"><i class="lnr lnr-cog"></i><span>Generator</span></a></li>
				</ul>
			</div>
		</div>
		<!-- left side menu end -->
    
		<!-- main content start -->
		<div class="main-content">
			
			<!-- header start -->
			<div class="header-section">
				
				<!-- toggle button start -->
				<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
				<!-- toggle button end -->
				
				<!-- notification menu start -->
				<div class="menu-right">
					<div class="user-panel-top">
						<div class="profile_details">		
							<ul>
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">	
											<span style="background:url(/SupraCompProfile/images/users.png) no-repeat center"> </span> 
											 <div class="user-name">
												<p><?php echo Yii::app()->user->name; ?><span>Status:online</span></p>
											 </div>
											 <i class="lnr lnr-chevron-down"></i>
											 <i class="lnr lnr-chevron-up"></i>
											<div class="clearfix"></div>	
										</div>	
									</a>
									<ul class="dropdown-menu drp-mnu">
										<li> <a href="<?php echo Yii::app()->createUrl('user/view',['id'=>Yii::app()->user->id]) ?>"><i class="fa fa-user"></i>Profile</a> </li> 
										<li> <a href="<?php echo Yii::app()->createUrl('site/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
									</ul>
								</li>
								<div class="clearfix"></div>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- notification menu end -->

			</div>
			<!-- header end -->
			
			<!-- content start -->
			<div id="page-wrapper">
				<div class="graphs">
					<?php echo $content; ?>	
				</div>
			</div>
			<!-- content end -->

		</div>
		<!-- main content end -->

		<!-- footer start -->
		<footer>
			<p>&copy; <?php echo date('Y'); ?> PT SUPRABAKTI MANDIRI. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
		</footer>
		<!-- footer end -->

	</section>
  
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nicescroll_2.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/scripts_2.js"></script>

</body>
</html>