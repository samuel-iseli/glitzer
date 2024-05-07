<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
		<meta class="foundation-mq">
		
		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/assets/images/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon-16x16.png">
		<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/assets/images/site.webmanifest">
		<link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/assets/images/safari-pinned-tab.svg" color="#003350">
		<meta name="msapplication-TileColor" content="#2b5797">
		<meta name="theme-color" content="#ffffff">

		<meta name="description" content="Glitzer-Effekt, Nadja Schüepp bietet Paarberatungen an, für Beziehungen, die aus dem Gleichgewicht geraten sind. Kommt Ihr nicht mehr weiter bei Beziehungsproblemen? Ein Beratungsgespräch kann helfen, wieder einen wertschätzenden Umgang miteinander zu finden und das Glitzern der Liebe wieder erstrahlen zu lassen." />
		<meta name="keywords" content="Paarberatung, Beziehungsprobleme" />

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>

				
				<header class="header" role="banner">
					<div class="mobileTrigger hide-for-large" id="menuToggle">
						<span class="top"></span>
						<span class="middle"></span>
						<span class="bottom"></span>
					</div>
					 <?php get_template_part( 'parts/nav', 'topbar' ); ?>
	 	
				</header> <!-- end .header -->