<!DOCTYPE html>
<!--[if lt IE 7]>      <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html <?php language_attributes(); ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js">
<head>
	<!--META-->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title><?php wp_title(''); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	


	<!--FAVICON(Initialzr)-->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_bloginfo('template_url');?>/img/icon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_bloginfo('template_url');?>/img/icon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_bloginfo('template_url');?>/img/icon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_bloginfo('template_url');?>/img/icon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_bloginfo('template_url');?>/img/icon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_bloginfo('template_url');?>/img/icon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_bloginfo('template_url');?>/img/icon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_bloginfo('template_url');?>/img/icon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo('template_url');?>/img/icon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_bloginfo('template_url');?>/img/icon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_bloginfo('template_url');?>/img/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_bloginfo('template_url');?>/img/icon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_bloginfo('template_url');?>/img/icon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_bloginfo('template_url');?>/img/icon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_bloginfo('template_url');?>/img/icon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!--JS-->
	<script src="<?php echo get_bloginfo('template_url');?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>	
	
	<!-- WP-HEAD & ENQUEUE_STYLE -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--Facebook SDK-->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!--BEGIN Website-->
	<div id="site">
		<header id="header">
			<!--BG-->
			<div id="header-bg"></div>
			
			<!--MOBILE-->
			<div class="navbar-header-mobile">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#"><span class='access'>Awen</span></a>
			</div>
			
			<!--DESKTOP-->
			<div class="container">
				<nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
					
					<div class="navbar-logo-button navbar-header">
						<button aria-controls="navbar" aria-expanded="false" data-target="#navbar-menu" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					
						<div id="navbar-logo">
							<?php if(is_home()) echo "<h1 id='logo-title'>";?>
							<a id="logo" href="<?php echo get_bloginfo('url');?>">
								<span class='access'>Awen</span>
							</a>
							<?php if(is_home()) echo "</h1>";?>
						</div>
					</div><!--navbar-header-->
					
					<div id="navbar-menu" class="navbar-list collapse navbar-collapse">
						<?php 
							$classCSS = (is_home())?"":"nav-right";
							wp_nav_menu( array(
								'menu'       	=> 'menu_header',
								'depth'      	=> 2,
								'container'  	=> false,
								'menu_class' 	=> 'nav nav-tabs nav-stacked source-sans '.$classCSS,
								'fallback_cb'	=> 'wp_page_menu',
								'walker' => new wp_bootstrap_navwalker()
								)
							);
						?>
					</div><!--.nav-collapse -->

				</nav><!--#navbar-->
			</div><!--.container-->
		</header><!--#header-->
		
		<?php if(!is_home()){?>
			<div id="banner">
				&nbsp;
			</div><!--banner-->
		<?php } ?>
		
		<div id="content">
