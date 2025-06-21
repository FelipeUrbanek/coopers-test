<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AlphaVille_-_Empresarial_Graciosa
 */

?>

<section class="no-results not-found pt-4">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Pesquisa não encontrada', 'alphaville-empresarial-graciosa' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'pronto para publicar seu primeiro post? <a href="%1$s"> Comece aqui </a>.', 'alphaville-empresarial-graciosa' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Desculpe, mas nada corresponde aos seus termos de pesquisa. Por favor, tente novamente com algumas palavras-chave diferentes.', 'alphaville-empresarial-graciosa' ); ?></p>
			<?php
		else :
			?>

			<p><?php esc_html_e( 'Parece que não conseguimos encontrar o que você está procurando. Talvez pesquisar possa ajudar.', 'alphaville-empresarial-graciosa' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
