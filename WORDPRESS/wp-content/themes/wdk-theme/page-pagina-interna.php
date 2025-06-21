<?php
/**
 * Template Name: Página Interna
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * Códigos Esseciais do WordPress
 * - Link da raiz do theme: <?php echo get_template_directory_uri(); ?>
 * - Class da página: <?php body_class(); ?>
 * - Link da raiz do WordPress: <?php echo get_site_url(); ?>
 * - Shortcode: <?php echo do_shortcode( '[your shortcode goes here]' ); ?>
 * - Título da página: <?php single_post_title(); ?>
 * 
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<br><br><br><br><br><br><br><br><br>
<center><h2>Oi! Eu sou o conteúdo da pagina interna :)</h2></center>
<br><br><br><br><br><br><br><br><br>

<?php get_footer(); ?>