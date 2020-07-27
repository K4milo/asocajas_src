<?php
//

/*
	Loop for Galleries

*/

?>

<section id="GalleryPost">
	<div class="container gallery-news">
		<header>
			<h2>Galería de Imágenes</h2>
		</header>
		<div class="gallery-news--wrapper">
			<?php 
				$args = array( 'post_type' => 'items-galeria', 'posts_per_page' => 10 );
				$query = new WP_Query( $args );
				while ( $query->have_posts() ) : $query->the_post();
			?>
				<article class="gallery-news--item">
					<figure class="gallery-news--thumb" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
						<a href="<?php the_permalink(); ?>"></a>
					</figure>
					<div class="gallery-news--caption">
						<h3>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>				
						</h3>
					</div>
				</article>
			<?php
				endwhile;
				wp_reset_query();
			?>
		</div>
	</div>
</section>