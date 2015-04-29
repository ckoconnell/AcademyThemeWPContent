<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<div id="mountain-bg"></div>
<div id="mountain"></div>
<video autoplay loop id="bgvid">
    <source src="videos/polina.webm" type="video/webm">
    <source src="http://ckoconnell.github.io/climbingfiles/fog.mp4" type="video/mp4">
</video>

<!-- <video autoplay loop id="bgvid-bottom">
    <source src="videos/polina.webm" type="video/webm">
    <source src="http://ckoconnell.github.io/climbingfiles/fog2.mp4" type="video/mp4">
</video> -->

		<div id="container">

			<!-- Start Header -->
			<div class="header">
				<div class="menuMobileTitle"><span class="menuIcon">&#9776;</span>Menu</div>
				<div class="menuMobile">
					<ul>
						<li><a href="http://localhost/climbing-academy/clinics-workshops">Clinics & Workshops</a></li>
						<li><a href="http://localhost/climbing-academy/sunset-speaker-music-series">Speakers & Music Series</a></li>
						<li><a href="http://localhost/climbing-academy/trade-fair-demo-gear">Trade Fair & Demo Gear</a></li>
						<li><a href="http://localhost/climbing-academy/fun-free-events">Fun & Free Events</a></li>
						<li><a href="http://localhost/climbing-academy/educational-seminars">Educational Seminars</a></li>
						<li><a href="http://localhost/climbing-academy/hive-zone">The Hive Zone</a></li>
						<li><a href="http://localhost/climbing-academy/attending-athletes">Attending Athletes</a></li>
					</ul>
				</div>

				<div class="leftWrap">
					<div class="logoWrap">
						<div class="academyLogo"><img src="wp-content/uploads/2015/04/academyLogo.png" /></div>

						<h1>Arc'teryx<br><span class="letterspacingClimbing">Climbing</span><br><span class="letterspacingAcademy">Academy</h1>
					</div>
					<div style="clear:both;"></div>
					<h2>PURSUE YOUR PERFECT MOUNTAIN EXPERIENCE</h2>
				</div>
				<div class="rightWrap">
					<div class="partnerWrap">

						<h4>In Partnership with:</h4>
						<img src="wp-content/uploads/2015/04/seatoskylogo.png">
						<h3>SQUAMISH, BC <br/> JULY 10-12, 2015</h3>
					</div>
					<div class="miniNavWrap">
						<a href="http://localhost/climbing-academy/event-schedule" class="miniNavItem navSched">
							<h3>Event Schedule</h3>
						</a>
						<a href="http://localhost/climbing-academy/venue-map" class="miniNavItem navMap">
							<h3>Venue Map</h3>
						</a>
						<a href="http://localhost/climbing-academy/getting-here" class="miniNavItem navDirection">
							<h3>Getting Here</h3>
						</a>
						<a href="http://localhost/climbing-academy/contact-us" class="miniNavItem navContact">
							<h3>Contact Us</h3>
						</a>
					</div>
				</div>
				<div style="clear: both;"></div>
                <div class="mobileMiniNavWrap">
                    <a href="http://localhost/climbing-academy/event-schedule" class="miniNavItem navSched">
                        <h3>Event<br>Schedule</h3>
                    </a>
                    <a href="http://localhost/climbing-academy/venue-map" class="miniNavItem navMap">
                        <h3>Venue<br>Map</h3>
                    </a>
                    <a href="http://localhost/climbing-academy/getting-here" class="miniNavItem navDirection">
                        <h3>Getting<br>Here</h3>
                    </a>
                    <a href="http://localhost/climbing-academy/contact-us" class="miniNavItem navContact">
                        <h3>Contact<br>Us</h3>
                    </a>
                </div>

					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>

				<script>
					$( ".menuMobileTitle" ).click(function() {
						$( ".menuMobile" ).toggleClass( "blockDisplay" );
					});
				</script>


				</div>




			</header>