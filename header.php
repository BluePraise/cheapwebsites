<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta
		charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if (wp_title('', false)) {
    echo ' :';
} ?>
		<?php bloginfo('name'); ?>
	</title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link
		href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico"
		rel="shortcut icon">
	<link
		href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png"
		rel="apple-touch-icon-precomposed">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description"
		content="<?php bloginfo('description'); ?>">




    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156916486-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-156916486-1');
    </script>

	<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v5.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/nl_NL/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="110167730521623"
  logged_in_greeting="Hi! Ik ben de bot van Cheap-Websites. Heb je vragen over de diensten, of prijzen? Vraag het vooral. "
  logged_out_greeting="Hi! Ik ben de bot van Cheap-Websites. Heb je vragen over de diensten, of prijzen? Vraag het vooral. ">
      </div>

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

	<!-- wrapper -->
	<div class="wrapper">

		<!-- header -->
		<header id="header" class="header header--fixed">
			<div class="wr">
				<div class="page-title">
					<a href="<?php echo home_url(); ?>" class="header__logo">Cheap Websites</a>
					<div class="subheader">WEBSITES VOOR STARTERS</div>
				</div>
				<nav class="header__nav">
                    <?php wp_nav_menu(
                        array(
                            'theme_location'  => 'Header Menu',
                            'menu'            => 'header-nav'
                            )
                        );
                       ?>
                    <div class="header__navCtas"></div>
                </nav>
			</div>

		</header>
		<!-- /header -->