<!doctype html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en-AU"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en-AU"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en-AU"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="" lang="en-AU" class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
	<a name="back-to-top"></a>
		<!-- wrapper -->
		<div class="wrapper">

			<div class="header-wrapper">
				<div class="container-fluid logo-wrapper">
							<div class="container">
								<div class="row">
									<!-- header -->
									<header class="header clear" role="banner">

											<!-- logo -->
											<div class="logo">
												<a href="<?php echo home_url(); ?>">
													<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
													<!--<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">-->
													<span><?php bloginfo('name'); ?></span>
												</a>
											</div>
											<!-- /logo -->
											<div class="site-description" id="site-description"><span><?php bloginfo('name'); ?></span></div>
									</header>
									<!-- /header -->
								</div>
							</div>
				</div>
				
				
				<div class="container-fluid menu-wrapper">
							<!-- nav -->
							<div class="container">
							<div class="row">
								<nav class="col-lg-offset-2 col-md-offset-1 navbar navbar-inverse navbar-static-top" role="navigation">
									<div class="navbar-header">
									  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									  </button>
									</div>
									<nav id="main-menu" class="collapse navbar-collapse">
										<?php html5blank_nav(); ?>
									</nav>
								</nav>					
							</div>
							</div>
							<!-- /nav -->
				</div>
				
			</div>
			

			