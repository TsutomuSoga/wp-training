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

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

					<!-- <?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>


					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'menu' => 'MainMenu',                     
						)); ?>

					</nav>

				</div> -->

				<!-- 固定ヘッダ表示用のブロック -->
					<div class="fix-header">
						<div class="fix-header-contents">
						<!-- ロゴはfloat左寄せで表示 -->
							<div id="fix-header-logo">
								<p>Wednesday Golf Club</p>
							</div>
						<!-- メニューのブロックはfloatで右寄せ -->
							<div id="fix-header-menus" class="cf">
								<ul id="scroll-fix-menu" class="menu">
									<li><a href="<?php echo home_url('/course'); ?>">コース紹介</a></li>
									<li><a href="<?php echo home_url('/price'); ?>">料金</a></li>
									<li><a href="<?php echo home_url('/facility'); ?>">施設案内</a></li>
									<li><a href="<?php echo home_url('/reserve'); ?>">ご予約</a></li>
									<li><a href="<?php echo home_url('/access'); ?>">アクセス</a></li>
								</ul>
							</div>
						</div>
					</div>
					<header class="clearfix">
							<div class="rogo">
								<a href="<?php echo home_url('/'); ?>"><img width="180" height="150" alt="ロゴ" src="<?php echo get_theme_file_uri(); ?>/images/rogo.gif"></a>
							</div><!-- //rogo -->

							<div class="name">
								<h1>Wednesday Golf Club</h1>
							</div><!-- //name -->

							<div class="navbox">
								<div id="nav">
									<ul>
										<li><a href="<?php echo home_url('/course'); ?>">コース紹介</a></li>
										<li><a href="<?php echo home_url('/price'); ?>">料金</a></li>
										<li><a href="<?php echo home_url('/facility'); ?>">施設案内</a></li>
										<li><a href="<?php echo home_url('/reserve'); ?>">ご予約</a></li>
										<li><a href="<?php echo home_url('/access'); ?>">アクセス</a></li>
									</ul>
								</div><!-- //nav -->
								<h2>Tel:0120-123-4567</h2>
							</div><!-- //navbox -->

			</header>
