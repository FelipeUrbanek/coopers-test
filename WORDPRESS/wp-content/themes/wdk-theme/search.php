<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package AlphaVille_-_Empresarial_Graciosa
 */

get_header();
?>

  <section id="titleHeader" class="py-5 my-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <h1>Página de Pesquisa</h1>
        </div>
      </div>
    </div>
  </section>

  <section data-aos="fade-right" data-aos-duration="2000">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
			<h3><?php printf( esc_html__( 'Resultados da Pesquisa: %s', 'alphaville-empresarial-graciosa' ), '<span>' . get_search_query() . '</span>' );?></h3>
			<?php 
			    if ( have_posts() ) : 
				
				while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'search' );

				endwhile; the_posts_navigation();

				else : get_template_part( 'template-parts/content', 'none' ); endif;
			?>
		</div>
        <div class="col-lg-4 sidebar-col">
			<?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
