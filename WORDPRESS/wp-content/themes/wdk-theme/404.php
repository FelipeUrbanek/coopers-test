<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package AlphaVille_-_Empresarial_Graciosa
 */

get_header();
?>

	<section id="titleHeader" class="py-5 my-5">
		<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
			<h1>Página Não Encontrada</h1>
			</div>
		</div>
		</div>
	</section>

	<main id="primary" class="site-main mb-5 pb-5">

		<section class="error-404 not-found">
			<div class="page-header text-center">
				<h1 class="page-title"><?php esc_html_e( 'Ups! Essa página não pode ser encontrada.', 'alphaville-empresarial-graciosa' ); ?></h1>
			</div>

			<div class="page-content text-center">
				<p><?php esc_html_e( 'Parece que nada foi encontrado neste local. Tente usar os menus superiores para navegar pelo site!', 'alphaville-empresarial-graciosa' ); ?></p>
			</div>
		</section>
	</main>

<?php
get_footer();
