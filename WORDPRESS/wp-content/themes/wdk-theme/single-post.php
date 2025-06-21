<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AlphaVille_-_Empresarial_Graciosa
 */

get_header();
?>

  <section id="titleHeader" class="py-5 my-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <h1><?php single_post_title(); ?></h1>
        </div>
      </div>
    </div>
  </section>

  <?php while ( have_posts() ) : the_post(); ?>

  <section id="contentSection" class="mb-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div id="post-<?php the_ID(); ?>" class="content-post-style">

              <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              } else { ?>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/posts/img-destaque.png" alt="<?php the_title(); ?>" class="img-fluid"/>
              <?php } ?>

            <div class="py-4">
              <?php
                if ( 'post' === get_post_type() ) : ?>
                <div class="content-post">
                  <?php the_content(); ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 sidebar-col">
          <?php get_sidebar(); ?>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8">
        <?php
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;

          endwhile;
          ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer();
