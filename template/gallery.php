<?php 
require ('./sfeedabc-master/core/init.php');
$sports_id = $general->getsports($sport);
?>
<!DOCTYPE html>
<html>
<head>
<title>SportsFeed:<?=$sport?></title>
<link href="..<?=$templatepath?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="..<?=$templatepath?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="..<?=$templatepath?>/css/flexy-menu.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!-- js -->
<script src="..<?=$templatepath?>/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="National Institute Of Techology, Trichy's own sports page, no more missing any sports action" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="..<?=$templatepath?>/js/move-top.js"></script>
<script type="text/javascript" src="..<?=$templatepath?>/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="..<?=$templatepath?>/js/flexy-menu.js"></script>
<script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>
</head>
</head>
	
<body>

<!-- banner -->
	<div class="banner" style="background-image:url('./images/<?=$sport."banner.jpg"?>')">
		<div class="container">
			<div class="banner-navigation">
				<div class="banner-nav">
						<ul class="flexy-menu orange nav1">
							<li class="hvr-sweep-to-bottom cap"><a href="./index.php?sport=<?=$sport?>">Home</a></li>
							<li class="hvr-sweep-to-bottom"><a href="./news.php?sport=<?=$sport?>">News</a>
								<ul>
									<li><a href="#">Matches</a></li>
									<li><a href="#">News Archive</a></li>
								</ul>
							</li>
							<li class="hvr-sweep-to-bottom"><a href="./squad.php?sport=<?=$sport?>">Squad</a></li>
							<li class="hvr-sweep-to-bottom"><a href="./gallery.php?sport=<?=$sport?>">Gallery</a></li>
							<!--<li class="hvr-sweep-to-bottom"><a href="blog.html">Blog</a></li>-->
							<li class="hvr-sweep-to-bottom"><a href="#testimonials">Contact Us</a></li>
							<!--<li class="hvr-sweep-to-bottom"><a href="about.html">About Us</a></li>-->
						</ul>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="logo">
				<a href="index.html"><img src="..<?=$templatepath?>/images/logo.png" alt=" " /></a>
			</div>
			<div class="banner-info">
				<h1>Welcome To SportsFeed:<?=$sport?></h1>
				<p>National Institute of Technology's <?=$sport?> Feed</p>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h3>Gallery</h3>
			
			<?php 
			$p = $general->gallery($sports_id);
			$i = 0;
			?>
			<div class="gallery-grids">
				<?php   foreach ($p as $value) {
					if($i%3 == 0)
					{
						?>
					<div class="clearfix"> </div>
					</div>
					<div class="gallery-grids">
					<?php }
						} ?>
					<div class="col-md-4 gallery-grid">
					<div class="gallery-grd">
				    <a class="fancybox" href="../sfeedabc-master/gallery/<?php echo $reach['file_name'] ?>" data-fancybox-group="gallery"><img src="images/14.jpg" class="img-style row6" alt=""><span> </span></a>
					</div>
				</div>
				<?php 
					$i = $i+1;
				?>
		</div>
		</div>
	</div>
<!-- //gallery -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<h3>News</h3>
					<ul>
						<li><a href="#">Matches</a></li>
						<li><a href="#">Team News</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<h3>Other</h3>
					<ul>
						<li><a href="#">Squad</a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
				
				<div class="clearfix"> </div>
			</div>

			echo $container;
		}
			<div class="footer-bottom">
				<div class="footer-bottom-left">
					<p>Website maintained by <a href="http://delta.nitt.edu/">Delta WebOps</a></p>
				</div>
				<!--<div class="header-right footer-right">
					<ul>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="p"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
					</ul>
				</div>-->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>