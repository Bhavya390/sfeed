<!DOCTYPE html>
<html>
<head>
	<title><?=$sport?> : SportsFeed</title>
	
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
	
	<!-- start-smooth-scrolling -->
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
	<!-- //start-smooth-scrolling -->
	<!-- flexy menu -->
	<script type="text/javascript" src="..<?=$templatepath?>/js/flexy-menu.js"></script>
	<script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>
	<!-- flexy menu ends here-->
</head>
	
<body>

<!-- banner -->
	<div class="banner" style="background-image:url('./images/banner/<?=$sport.".jpg"?>')">
		<div class="container">
			<div class="banner-navigation">
				<div class="banner-nav">
						<ul class="flexy-menu orange nav1">
							<li class="hvr-sweep-to-bottom cap"><a href="./template/index.html">Home</a></li> <!-- qqqqqqqqqqqqqqqqqqqqqqqqq -->
							<li class="hvr-sweep-to-bottom"><a href="#News">News</a>
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
				<!--<a href="index.html">--><img src="..<?=$templatepath?>/images/logo.png" alt=" " /></a>  <!-- qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq -->
			</div>
			<div class="banner-info">
				<h1>Welcome To SportsFeed : <?=$sport?></h1> <!-- qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq spaces for it -->
				<p>National Institute of Technology - Trichy's <?=$sport?> Feed</p> <!-- qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq text -->
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			
			<div class="banner-bottom-grids">
				<!-- 	teams News Archive -->
				<div class="col-md-3 banner-bottom-grid">
					<a href=""><img src="./images/<?=$sport.'1'?>.jpg" alt=" " height="145vw"/></a>
					<h4><a href="./news.php?sport=<?=$sport?>">Teams News Archive</a></h4>
					<p><?=$content['col']['0']?><br><br></p>
					<div class="more">
						<a href="./news.php?sport=<?=$sport?>">Know More</a>
					</div>
				</div>

				<!-- History : Matches -->
				<div class="col-md-3 banner-bottom-grid">
					<a href="./matches.php?sport=<?=$sport?>"><img src="./images/<?=$sport.'2'?>.jpg" alt=" " height="145vw"/></a>
					<h4 class="line"><a href="single.html">History : Matches</a></h4>
					<p><?=$content['col']['1']?><br><br><br></p>
					<div class="more">
						<a href="./matches.php?sport=<?=$sport?>">Know More</a>
					</div>
				</div>

				<!-- Squad -->
				<div class="col-md-3 banner-bottom-grid">
					<a href="./squad.php?sport=<?=$sport?>"><img src="./images/<?=$sport.'3'?>.jpg" alt=" " height="145vw"/></a>
					<h4><a href="single.html">Squad</a></h4>
					<p><?=$content['col']['2']?></p>
					<div class="more">
						<a href="./squad.php?sport=<?=$sport?>">Know More</a>
					</div>
				</div>

				<!-- Gallery -->
				<div class="col-md-3 banner-bottom-grid">
					<a href="./gallery.php?sport=<?=$sport?>"><img src="./images/<?=$sport.'4'?>.jpg" alt=" " height="145vw"/></a>
					<h4 class="line"><a href="single.html">Gallery</a></h4>
					<p><?=$content['col']['3']?><br><br><br></p>
					<div class="more">
						<a href="./gallery.php?sport=<?=$sport?>">Know More</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->

<!-- news -->
	<div id="news" class="news">
		<div class="container" id="News">
			<h3>News & Events</h3>
			<br><br>
			<div class="news-grids">
				<div class="col-md-6 news-grid">
					<div class="col-md-6 news-grd">
						<p>10<span>JUNE</span>2015</p>
					</div>
					<div class="col-md-6 news-grd-right">
						<h4>repudiandae sint et molestiae sapiente</h4>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
						accusantium doloremque laudantium. repudiandae sint et molestiae non recusandae.
						Itaque earum rerum hic tenetur a sapiente delectus.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 news-grid">
					<div class="col-md-6 news-grd">
						<p>20<span>JUNE</span>2015</p>
					</div>
					<div class="col-md-6 news-grd-right">
						<h4> Nemo enim ipsam voluptatem quia aspernatur</h4>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
						accusantium doloremque laudantium. repudiandae sint et molestiae non recusandae.
						Itaque earum rerum hic tenetur a sapiente delectus.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="news-grids">
				<div class="col-md-6 news-grid">
					<div class="col-md-6 news-grd">
						<p>10<span>APRIL</span>2015</p>
					</div>
					<div class="col-md-6 news-grd-right">
						<h4>repudiandae sint et molestiae sapiente</h4>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
						accusantium doloremque laudantium. repudiandae sint et molestiae non recusandae.
						Itaque earum rerum hic tenetur a sapiente delectus.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 news-grid">
					<div class="col-md-6 news-grd">
						<p>20<span>APRIL</span>2015</p>
					</div>
					<div class="col-md-6 news-grd-right">
						<h4>Nemo enim ipsam voluptatem quia aspernatue</h4>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
						accusantium doloremque laudantium. repudiandae sint et molestiae non recusandae.
						Itaque earum rerum hic tenetur a sapiente delectus.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //news -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3>Contact Us</h3>
			<p class="aut">For any queries please do contact us at</p>
<!-- Slider-starts-Here -->
				<script src="..<?=$templatepath?>/js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: true,
				        nav: false,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
				<ul class="rslides" id="slider3">
					<li>
						<div class="testimonials-grids">
							<div class="testimonials-grid-left">
								<img src="..<?=$templatepath?>/images/2.png" alt=" " />
							</div>
							<div class="testimonials-grid-right">
								<p>Mr.Alor Ayyer<span> ,Physcial Education Dept</span></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
					<li>
						<div class="testimonials-grids">
							<div class="testimonials-grid-left">
								<img src="..<?=$templatepath?>/images/3.png" alt=" " />
							</div>
							<div class="testimonials-grid-right">
								<p>Mr.Someone Simeone<span> ,Team Captain</span></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
					<li>
						<div class="testimonials-grids">
							<div class="testimonials-grid-left">
								<img src="..<?=$templatepath?>/images/4.png" alt=" " />
							</div>
							<div class="testimonials-grid-right">
								<p>Mr.Abhishek Kaushik<span> ,WebOps Cordinator</span></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
<!-- //testimonials -->
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
