<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AlphaVille_-_Empresarial_Graciosa
 */

get_header();
?>


	<?php if ( have_posts() ) : ?>

		<section id="titleHeader" class="py-5 my-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<?php
							the_archive_title( '<h1>', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</div>
				</div>
			</div>
		</section>

		<section data-aos="fade-right" data-aos-duration="2000">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="row">
							<?php
								while ( have_posts() ) :
									the_post();
									get_template_part( 'template-parts/content', get_post_type() );
								endwhile;
								the_posts_navigation();
								else :
									get_template_part( 'template-parts/content', 'none' );
								endif;
							?>
						</div>
					</div>
					<div class="col-lg-4 sidebar-col mb-5 pb-5">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>

  <section id="callOne">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <h5>Fique por dentro de eventos e notícias locais das <strong>Delegacias Regionais</strong></h5>
        </div>
        <div class="col-lg-3">
          <a href="http://localhost:8888/fpj/delegacias-regionais/" class="btn-fpj-solid-red mt-5">Saiba Mais</a>
        </div>
      </div>
    </div>
  </section>

  <section id="" class="my-5 py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="h3-destaque">Nossos Parceiros</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-parceiros.png" alt="Logo Parceiros" class="img-fluid p-4">
        </div>
        <div class="col-lg-6">
          <h3 class="h3-destaque">Nossos Apoiadores</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-apoiadores.png" alt="Logo Apoiadores" class="img-fluid p-4">
        </div>
      </div>
    </div>
  </section>

  <section id="" class="my-5 py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="h3-destaque">Nosso Instagram @fpjudo</h3>
        </div>
        <div class="col-lg-12 mt-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-instagram.jpg" alt="img-fluid" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
