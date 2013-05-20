
<!DOCTYPE html>
<?php include("php/connection.php");?>
<html dir="ltr" lang="en-US"><!--<![endif]--><!-- BEGIN head --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!--Meta Tags-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
		
	<!--Title-->
	<title>Glove - Helping Build Healthy Ghanaians</title>

	<!--Stylesheets-->
	<link rel="stylesheet" href="css/superfish.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/blue.css" type="text/css" media="all">
			
		
	<link href="css/css" rel="stylesheet" type="text/css">
	<link href="css/css(1)" rel="stylesheet" type="text/css">

	<!--Favicon-->
	<link rel="shortcut icon" href="http://themes.quitenicestuff.com/relief/favicon.ico" type="image/x-icon">

	<!--JavaScript-->
	<script type="text/javascript" src="javascript/jquery.min.js"></script>
	<script type="text/javascript" src="javascript/jquery-ui.min.js"></script>
	<script type="text/javascript" src="javascript/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="javascript/superfish.js"></script>
	<script type="text/javascript" src="javascript/hoverIntent.js"></script>
	<script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="javascript/jquery.jcarousel.min.js"></script>
	<!-- <script type="text/javascript" src="javascript/jquery.mobilemenu.min.js"></script>-->
	<script type="text/javascript" src="javascript/scripts.js"></script>

	<script type="text/javascript">
		var tips;
		function init() {
			tips = document.getElementById("tips");

			var tipsArray = new Array();
			<?php foreach($tips as $tip){ ?>
				tipsArray.push(<?php echo '"'.$tip.'"' ?>);
			<?php } ?>

			tips.innerHTML = tipsArray[0];
			setInterval(setTip, 5000);

			var count = 1;
			function setTip() {
				if (count < tipsArray.length) {
					tips.innerHTML = tipsArray[count];

					// var current_url = location.href;
					// var target_url = current_url + "#tips_container";

					// location.href = target_url;

					count += 1;
				}
				else {
				count = 0;
				}
			}
		}
	</script>
	
	
	<!--[if IE]>
		<script type="text/javascript" src="js/selectivizr-min.js"></script>
	<![endif]-->

<!-- END head -->
</head>

<!-- BEGIN body -->
<body onload = "init()">

	<!-- BEGIN DEMO ONLY -->
	<!-- END DEMO ONLY -->

	<!-- BEGIN #header -->
	<div id="header">
		
		<div id="header-inner">
		
		<!-- BEGIN #top-bar -->
		<div id="top-bar" class="clearfix">
			
			<div class="top-inner">
			
				<ul class="social-icons fl">
					<li><a href="#"><span id="twitter_icon"></span></a></li>
					<li><a href="http://www.facebook.com/pages/Glove-Foundation-Ghana/102076483245492?fref=ts"><span id="facebook_icon"></span></a></li>
					<li><a href="#"><span id="googleplus_icon"></span></a></li>
				</ul>
			
				<ul class="top-menu fr">
					<li><a href="donate.htm">Volunteer</a><span>/</span></li>
					<li><a href="contactUs.htm">Contact</a></li>
				</ul>
			
			</div>
		
		<!-- END #top-bar -->
		</div>
		
		<div class="title-wrapper clearfix">
		
			<div id="title" class="fl">
				<h1>
					<a href="#"><img src = "img/logo.png"></a>
					<span id="tagline"></span>
				</h1>
			</div>
		
			<div class="donate-btn fr">
				<div class="donate-left"></div>
				<a href="donate.htm" class="donate-mid"><span>Donate Now+</span></a>
				<div class="donate-right">
					<div class="donate-right-inner"></div>
				</div>
			</div>
		
		</div>	
		
		<div id="main-menu-wrapper" class="clearfix">
			
			<ul id="main-menu" class="fl sf-js-enabled">
				<li class="current_page_item"><a href="homeblue.htm">Home</a></li>
				<li><a href="latestNews.htm">Latest News</a></li>
				<li>
					<a href="gallery.htm" class="sf-with-ul">Gallery<span class="sf-sub-indicator"> »</span></a>
					<ul style="display: none; visibility: hidden;">
						<li><a href="gallery.htm">Aerobics At Queens Hall</a></li>
						<li><a href="gallery.htm">Asonomaso Health Screening</a></li>
						<li><a href="gallery.htm">Odorkor Medical Outreach</a></li>
						<li><a href="gallery.htm">Screeninn At Accra Polytechnic</a></li>
						<li><a href="gallery.htm">Ablekuma North Health Fair</a></li>
						<li><a href="gallery.htm">Team Workshop</a></li>
					</ul>
				</li>
				<li><a href="events.htm">Events</a></li>
				<li><a href="aboutUs.htm">About Us</a></li>
				<li><a href="contactUs.htm">Contact Us</a></li>	
			</ul>
			
			<form method="get" action="http://google.com" id="menu-search" class="fr">
				<input type="text" onblur="if(this.value==&#39;&#39;)this.value=&#39;Search...&#39;;" onfocus="if(this.value==&#39;Search...&#39;)this.value=&#39;&#39;;" value="Search..." name="s">
			</form>
			
		<select><option selected="selected" value="">Go to...</option><option value="index.html">Home</option><option value="blog.html">Latest News</option><option value="gallery.html">Gallery »</option><option value="gallery.html">Clean Water Project</option><option value="gallery.html">Fund Raising Events</option><option value="gallery.html">The Team</option><option value="gallery.html">Another Level »</option><option value="gallery.html">3rd</option><option value="events.html">Events</option><option value="page.html">About Us</option><option value="contact.html">Contact Us</option></select></div>
	
		<!-- END #header-inner -->
		</div>
	
	<!-- END #header -->
	</div>
	
	<!-- BEGIN .slides -->
	<div class="slider section slide-loader">
		
	<!-- END .slides -->
	<div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; -webkit-transition: 0s; transition: 0s; -webkit-transform: translate3d(-1880px, 0, 0);"><li class="clone" style="width: 940px; float: left; display: block;">
				<img src="img/slide1.jpg" alt="">
				<div class="flex-caption">
					<p>Health screening at Odorkor, Accra</p>
				</div>
			</li>
			<li style="width: 940px; float: left; display: block;" class="">
				<img src="img/mummy.jpg" alt="">
				<div class="flex-caption">
					<p>Health talk on diabetes</p>
				</div>
			</li>
			<li style="width: 940px; float: left; display: block;" class="flex-active-slide">
				<img src="img/aerobics.jpg" alt="">
				<div class="flex-caption">
					<p>Aerobics at KNUST, Kumasi</p>
				</div>
			</li>
			<li style="width: 940px; float: left; display: block;">
				<img src="img/group.jpg" alt="">
				<div class="flex-caption">
					<p>The Glove family after a health outreach</p>
				</div>
			</li>
		<li style="width: 940px; float: left; display: block;" class="clone">
				<img src="img/slide4.jpg" alt="">
				<div class="flex-caption">
					<p>Asonomaso health screening</p>
				</div>
			</li></ul></div><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
	
	<!-- BEGIN #content -->
	<div id="content">
		
		<div class="section clearfix block-section">
			<div class="one-third clearfix">
				<h3 class="title1">Who We Are<span class="title-end"></span></h3>
				<p>GOD’S LOVE FOUNDATION (GLOVE FOUNDATION) is a not-for-profit organization that is established with the aim of promoting preventive health in Ghana. The main objective of its establishment is to promote the dissemination and exchange of medical and scientific knowledge among students, Health service workers and the general public at large.</p>
				<p><a href="aboutUs.htm" class="button2">Learn More</a></p>
			</div>
			<div class="one-third clearfix">
				<h3 class="title1">Mission<span class="title-end"></span></h3>
				<p>To help create awareness among the general public on preventive health
					To help promote the dissemination of medical and scientific knowledge from public health practitioners to the general public.
					To help build a peaceful and ordered community that would be conducive to healthy academic work and socio-cultural advancement.
					To help prevent the occurrence of preventable diseases.</p>
				<p><a href="aboutUs.htm" class="button2">Read More</a></p>
			</div>
			<div class="one-third clearfix last-col">
				<h3 class="title1">How To Help<span class="title-end"></span></h3>
				<p>By donating to the foundation<br>By volunteering to help in our outreach and awareness programmes<br>
				By parnering with us as a co-NGO to help us in certain resources</p>
				<p><a href="donate.htm" class="button2">Act Now</a></p>
			</div>
		</div>
		
		<div id = "tips_container" class="section"><h3 class = "title1">Health Tips</h3>
			<div class="msg1">
				<div class="edge-top"></div>
				<p id = "tips" style = "color: white">10 health screening and seminars organized during 2011, we would like to thank everyone for their kind support</p>
				<div class="edge-bottom"></div>
			</div>
		</div>
		
		<div class="blog-event-prev-wrapper section clearfix">
			<div class="two-thirds">
				<h3 class="title1">Latest News<span class="title-end"></span></h3>
				<div class="blog-prev clearfix">
					<div class="blog-prev-img">
						<img src="img/accrapoly/apoly12.jpg" alt="">
					</div>
					<div class="blog-prev-content">
						<h4><a href="#">Glove Foundation's Health week screening exercise</a><span>Posted March 25, 2011 by Raymond Sintim</span></h4>
						<p>The Foundation supported the faculty of Allied Health Science in organizing their health week and screening exercise for the Ejisu community</p>
						<p><a href="#" class="button1">Read More »</a></p>
					</div>
				</div>
				<div class="blog-prev clearfix">
					<div class="blog-prev-img">
						<img src="img/Ablekuma/ablekuma5.jpg" alt="">
					</div>
					<div class="blog-prev-content">
						<h4><a href="#">Glove Foundation Organizes Physical Health check at KNUST Kumasi</a><span>Posted April 22, 2011 by Raymond Sintim</span></h4>
						<p>The Foundation undertook Physical Health check (BMI, BP, Flexibility, Aerobic Capacity, Minor Musculoskeletal Injury Rehabilitation, Stretching </p>
						<p><a href="#" class="button1">Read More »</a></p>
					</div>
				</div>
				
				<div class="blog-prev clearfix">
					<div class="blog-prev-img">
						<img src="img/Ablekuma/ablekuma.JPG" alt="">
					</div>
					<div class="blog-prev-content">
						<h4><a href="news/abnorth.htm">Glove Health Fair At Ablekuma North</a><span>Posted October 15, 2013 by Raymond Sintim</span></h4>
						<p>We collaborated with the Association of Sports and Exercise Science Students to organize Health Screening and Seminar for the KNUST Student</p>
						<p><a href="news/abnorth.htm" class="button1">Read More »</a></p>
					</div>
				</div>
			</div>
			<div class="one-third last-col">
				<h3 class="title1">Events<span class="title-end"></span></h3>
					There are no upcoming events
				<!--<div class="event-prev clearfix">
					<div class="event-prev-date">
						<p class="month">May</p>
						<p class="day">30</p>
					</div>
					<div class="event-prev-content">
						<h4><a href="#">Donation at Osu Orphanage Home</a></h4>
						<p><strong>Time:</strong> 10am <br>
						<strong>Location:</strong> Osu, Accra</p>
					</div>
				</div>
				<div class="event-prev clearfix">
					<div class="event-prev-date">
						<p class="month">May</p>
						<p class="day">30</p>
					</div>
					<div class="event-prev-content">
						<h4><a href="#">Glove Walk</a></h4>
						<p><strong>Time:</strong> 10am <br>
						<strong>Location:</strong> Kumasi Polytechnic</p>
					</div>
				</div>
				<div class="event-prev clearfix">
					<div class="event-prev-date">
						<p class="month">May</p>
						<p class="day">30</p>
					</div>
					<div class="event-prev-content">
						<h4><a href="#">Glove Anti-Malaria Seminar</a></h4>
						<p><strong>Time:</strong> 10am <br>
						<strong>Location:</strong> Cape Coast</p>
					</div>
				</div>-->
			</div>
		</div>
		
	<!-- END #content -->
	</div>
	
	<!-- BEGIN #footer-wrapper -->
	<div id="footer-wrapper">
	
		<div class="footer-tear"></div>
		
		<!-- BEGIN #footer -->
		<div id="footer">
			
			<div class="clearfix">
				
				<!-- BEGIN .two-forths -->
				<div class="two-forths">
					<div class="widget">
						<div class="widget-title">
							<h4>About Us</h4>
						</div>
						<p>GOD’S LOVE FOUNDATION (GLOVE FOUNDATION) is a not-for-profit organization that is established with the aim of promoting preventive health in Ghana. The main objective of its establishment is to promote the dissemination and exchange of medical and scientific knowledge among students, Health service workers and the general public at large. It started softly as a students’ club titled CITA-KNUST (2010) where it was only operational in the Kwame Nkrumah University of Science and Technology. After a year, the then club became GLOVE FOUNDATION-GHANA in other to spread its selfless goals to all angles of the country.</p>
						
						<p></p>
						<p style = "color: white; margin:10px 0 30px 0px;"><a href="aboutUs.htm" class="button1">Read More »</a></p>
					</div>
				<!-- END .two-forths -->
				</div>
				
				<!-- BEGIN .one-forth -->
				<div class="one-forth">
					<div class="widget">
						<div class="widget-title">
							<h4>Site Map</h4>
						</div>
						<ul>
							<li><a href="latestNews.htm">Latest News</a></li>
							<li><a href="gallery.htm">Gallery</a></li>
							<li><a href="events.htm">Events</a></li>
							<li><a href="contactUs.htm">Contact Us</a></li>
						</ul>
					</div>
				<!-- END .one-forth -->
				</div>
				
				<!-- BEGIN .one-forth .last-col -->
				<div class="one-forth last-col">
					<div class="widget">
						<div class="widget-title">
							<h4>Facebook</h4>
						</div>
						<div class="flickr_badge_wrapper clearfix">
							
							<div class="fb-facepile" data-href="http://www.facebook.com/pages/Glove-Foundation-Ghana/102076483245492?fref=ts" data-action="like" data-max-rows="2" data-width="300"></div>

							<p class="flickr-more-photos"><a href="http://www.flickr.com/photos/39297544@N06" class="button1">View More »</a></p>
						</div>	
					</div>
				<!-- END .one-forth .last-col -->
				</div>
				
			</div>
			
			<!-- BEGIN .widget .bottom -->
			<div class="widget bottom">
				<div class="widget-title">
					<h4>Sponsors</h4>
				</div>
					
				<div class=" jcarousel-skin-tango"><div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;"><div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;"><ul id="mycarousel" class="jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 1880px;">
				    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" style="float: left; list-style: none;" jcarouselindex="1"><a href="http://www.ghanayp.com/company/8665/Voltic_Gh_Ltd/website"><img src="img/voltic.jpg" alt="" width = "200px" height = "100px"></a></li>
				    
				 </ul></div><div class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal" style="display: block;" disabled="disabled"></div><div class="jcarousel-next jcarousel-next-horizontal" style="display: block;"></div></div></div>
			
			<!-- END .widget .bottom -->
			</div>
			
		<!-- END #footer -->
		</div>
		
		<div id="footer-copy-wrapper">
			
			<div id="footer-copy">
				<p class="clearfix"><span class="fl">© Copyright 2013</span><span class="footer-menu fr"><a href="/news">News</a> / <a href="/aboutus">About</a> / <a href="/donate">Donate</a></span></p>
			</div>
			
		</div>
		
	<!-- END #footer-wrapper -->
	</div>
	
<script type="text/javascript" src="javascript/scripts.js"></script>

<!-- END body -->

</body></html>