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

		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="stylesheet" href="/project/affirmations/wp-content/themes/affirmations/library/css/animate.css">
		<script type="text/javascript" src="/project/affirmations/wp-content/themes/affirmations/library/js/jquery-3.1.1.min.js"></script>

		<script>

		$(function() {

			var color = '#';
		    var letters = ['08485c','dd4f49','e1b303','4d6b78','55a2a5', 'ffbd43', 'dd125b', '942f59', '208582', '67bac5', '673888', 'ef4f91', 'c79dd7', '4d1b7b']; 
		    color += letters[Math.floor(Math.random() * letters.length)];
		    $(document).ready(function() {
	            $('body').css('background-color', color);
	         });

		    $('input').click(function() {
	            location.reload();
		    });

		});

		</script>

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	<!-- onLoad="return generate_color() -->

		<div id="container">
		