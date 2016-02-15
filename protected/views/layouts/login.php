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

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.10.2.min.js"></script>
	
	<!-- webfonts
	<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	-->

</head>

<body class="sign-in-up">

	<section>

		<div id="page-wrapper" class="sign-in-wrapper">
			<div class="graphs">
				<div class="sign-in-form">
					<div class="sign-in-form-top">
						<p><span>Sign In to</span> <a href="#">Admin</a></p>
					</div>
					<div class="signin">
						<?php echo $content; ?>
					</div>
				</div>
			</div>
		</div>

		<footer>
			<p>&copy; <?php echo date('Y'); ?> PT SUPRABAKTI MANDIRI. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
		</footer>

	</section>
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nicescroll_2.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/scripts_2.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min_2.js"></script>

</body>
</html>