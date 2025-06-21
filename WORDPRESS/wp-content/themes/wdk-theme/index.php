<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AlphaVille_-_Empresarial_Graciosa
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) : if ( is_home() && ! is_front_page() ) : ?>

  <section id="titleHeader" class="py-5 my-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <h1>Últimas Notícias</h1>
        </div>
      </div>
    </div>
  </section>

  <?php endif; ?>

  <section data-aos="fade-right" data-aos-duration="2000">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <?php  
              while ( have_posts() ) : the_post();  get_template_part( 'template-parts/content', get_post_type() );
              endwhile; the_posts_navigation();
              else : get_template_part( 'template-parts/content', 'none' );
              endif;
            ?>
          </div>
        </div>
        <div class="col-lg-4 sidebar-col">
			    <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>


  <?php get_footer(); ?>
