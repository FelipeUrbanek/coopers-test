<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coopers_Test
 */

?><!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title('|', true, 'right');
	bloginfo('name'); ?></title>

	<!-- Meta tags de acessibilidade e SEO -->
	<meta name="robots" content="index, follow" />
	<meta name="language" content="Portuguese" />
	<meta name="revisit-after" content="7 days" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="theme-color" content="#4ac959" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="author" content="Felipe Urbanek & Coopers" />

	<!-- Preconnect -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="preconnect" href="https://cdnjs.cloudflare.com" />

	<!-- Favicon -->
	<?php
	if (has_site_icon()) {
		wp_site_icon();
	} else {
		?>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png"
			type="image/x-icon" />
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" type="image/x-icon" />
		<?php
	}
	?>

	<!-- CSS -->
	<link href="https://fonts.cdnfonts.com/css/soleil" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css"
		rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
		media="print" onload="this.media='all'" />
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/css/aos.css" rel="stylesheet" media="print"
		onload="this.media='all'" />
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" />

	<!-- Fontes -->
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet" />

	<!-- Carousel -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"
		media="print" onload="this.media='all'" />

	<!-- Fallback para CSS não crítico -->
	<noscript>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/css/aos.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
	</noscript>

	<!-- Toastify CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

	<noscript>
		<style>
			/* Fallback para carrossel quando JS está desativado */
			.good-things-slider .splide__list {
				display: grid;
				grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
				gap: 20px;
				padding: 20px;
			}

			.good-things-slider .splide__slide {
				opacity: 1 !important;
				visibility: visible !important;
			}

			/* Esconde elementos que dependem de JS */
			.splide__arrows,
			.splide__pagination {
				display: none !important;
			}
		</style>
	</noscript>

	<?php wp_head(); ?>
</head>

<body>