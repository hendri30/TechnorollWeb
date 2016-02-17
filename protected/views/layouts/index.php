<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!-- Basic Meta Tags -->
	<meta charset="utf-8">
	<title>Techno ROLL</title>
	<meta name="description" content="Techno ROLL">
	<meta name="keywords" content="frame, idler, pulley">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if (gte IE 9)|!(IE)]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<![endif]--> 
															
	<!-- Favicon -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.png" rel="icon" type="image/png">

	<!-- Bootstrap -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Styles -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" rel="stylesheet" id="color-style"> 

	<!-- Flexslider CSS -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/flexslider.css" rel="stylesheet">
	
	<!-- Magnific Popup -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/magnific-popup.css" rel="stylesheet"> 
						 
	<!-- Animate -->    
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/animate.css" rel="stylesheet"> 

	<!-- Font Awesome Style -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet">

	<!-- Entypo Icons -->    
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/entypo.css" rel="stylesheet">  

	<!-- LayerSlider stylesheet -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/layerslider.css" rel="stylesheet">  

	<!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,300,800' rel='stylesheet' type='text/css'>

	<!-- Index CSS -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/index.css" rel="stylesheet">
	
	<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->  
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.js"></script>

	</head>

<body>

	<div style="display: none;" id="fit-vids-style" class="fit-vids-style">­</div>

	<!-- Header -->
	<header id="home"> 

		<div class="space40"></div> 

		<!-- Nav -->
		<nav class="navbar" role="navigation">
			<div class="navbar-inner">
				<div class="container">
									
					<!-- Logo -->                       
					<a href="#" title="Home" class="back-to-top"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" class="logo" alt=""></a>         

					<!-- Menu -->
					<ul class="nav navbar-nav" id="nav">
						<li class="selected"><a href="index.html" title="">Home</a></li>
						<li><a class="goes-to" href="#product" title="">Products & Features</a></li>
						<li><a class="goes-to" href="#about" title="">About</a></li>      
						<li><a class="goes-to" href="#portfolio" title="">Portfolio</a></li>
						<?php if(!Yii::app()->user->isGuest){ ?>
						<li><a class="goes-to" href="<?php echo Yii::app()->createUrl('site/admin') ?>" title="">Admin</a></li>
						<?php } ?>
						<li>
							<?php 
							$translate=Yii::app()->translate;
							echo $translate->dropdown();
							?>
						</li>
					</ul>
					<!-- Menu End -->  
					
				</div> 
			</div>  
		</nav>
		<!-- Nav End -->

		<div class="space40"></div> 

		<div class="container">
			<div class="row">
				<div class="col-md-12">     

					<!-- LayerSlider -->
					<div id="slider-wrapper">
						<div id="layerslider" style="width:1140px;height:546px;max-width:1140px;">
							<?php $this->widget('SliderWidget'); ?>
						</div>
					</div>
					<!-- LayerSlider End -->
							 
				</div>
			</div>    
		</div>   

	</header>
	<!-- Header End -->

	<?php echo $content; ?>
	
	<!-- Social Footer -->
	<div class="social-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="social-footer">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-tumblr"></i></a>
					</div>
				</div>
			</div>
		</div>        
	</div>
	<!-- Social Footer End -->

	<!-- Footer -->  
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				
					<div class="panel-footer">
						<div class="row space30"></div> 

						<div class="row">
							<div class="col-md-4">
								<h4>About</h4>     
								<p>
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" style="width:200px;" class="logo-footer" alt="">
								</p>
								<p>
									Technoroll offers a complete range of standard and custom designed conveyor idlers for various bulk handling
									application in gravel, mining, cement, coal processing, bulk terminal, <a href="#about" class="goes-to">Read More</a>
								</p>
								<p class="white">                     
									Mon - Fri: 10 AM to 5 PM<br>
									Sat - Sun: 10 AM to 2 PM
								</p>
							</div> 
							<div class="col-md-4">
								<h4>From the Blog</h4>
								<div class="white">Morbi id fementum loremt</div>
								<p>Nullam sit amet semper</p>
								<hr>
								
								<div class="white">Ladochi cel rosvudunm tresich</div>
								<p>Koltuer adinu mmy nibper</p>
								<hr>
								
								<div class="white">Infilti xenar balimun vofilaz</div>
								<p>Zimet semperllam sit mot semper</p>
								<hr>
								
							</div> 
							<div class="col-md-4">
								<h4>Recent Tweets</h4>
								
								<div class="tweet">
									<div>Lorem ipsum dolor uam od tincmmy nibh euidunt ut laoreet dolore magnot amet, consectety nibh euis mit etuer adif.</div>
									<p class="white">2 Days ago</p>
									<i class="fa fa-twitter"></i>
								</div>
								
								<div class="tweet">
									<div>Huam od tincmmy nibh euioreet dolore magna alior sit amet, cons ecte tctetuer adinummy nibh euis mit etugari.</div>
									<p class="white">3 Days ago</p>
									<i class="fa fa-twitter"></i>
								</div>
								
							</div> 
						</div> 
						
						<div class="row space10"></div> 
		
						<div class="row">
							<div class="col-md-2 col-md-offset-10">
								<button class="btn btn-large bc-3 back-tt back-to-top"><i class="fa fa-angle-up"></i></button>
							</div> 
						</div> 
					</div> 
					
					<div class="space80"></div> 
					
				</div> 
			</div>   
		</div>     

	</footer>     
	<!-- Footer End -->    

	<!-- JavaScripts -->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>  
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.easing.js"></script>    
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.sticky.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/tinynav.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/functions.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/layerslider.kreaturamedia.jquery.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/layerslider.transitions.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/greensock.js"></script> 
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.scrollTo.js"></script> 
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.fitvids.js"></script> 
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/animate.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/respond.min.js"></script>   
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/retina.js"></script> 
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.isotope.min.js"></script>

	<script type="text/javascript">
		$(function(){
			$(".tab-image-features").click(function() {
				// alert("aa");
			});
			// var tinggiTabFeature = $('#tab-features').height();
			// if(tinggiTabFeature <= 362){
			//   $("#btn-read-features").remove();
			// } 

			// $('#btn-read-features').click(function(){
			// 	if($(this).text()=='Read More'){
			// 		$('#tab-features').attr('style','height:auto !important;');
			// 		$(this).text('Read Less');
			// 	}else{
			// 		$('#tab-features').removeAttr('style');
			// 		$(this).text('Read More');
			// 	}
			// });

		});
	</script>
	
	<a id="back-to-top"></a>

</body></html>
