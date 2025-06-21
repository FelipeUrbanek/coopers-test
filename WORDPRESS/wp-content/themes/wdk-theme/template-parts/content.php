<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AlphaVille_-_Empresarial_Graciosa
 */

?>


	<div class="col-lg-6 p-3">
		<a href="<?php the_permalink(); ?>">
			<div class="box-post-banner-1">
			<?php the_post_thumbnail(); ?>
				<div class="overlay-post">
					<div class="content-overlay-post">
						<p class="destaque-bg">Destaques</p>
						<p class="data-post"><?php the_time('j \d\e F \d\e Y') ?></p>
						<h2><?php the_title(); ?></h2>
					</div>
				</div>
			</div>
		</a>
	</div>
				
</article><!-- #post-<?php the_ID(); ?> -->
