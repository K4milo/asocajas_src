<section id="MainMagazines">
	<div class="container pod-magazines">
		<header>
			<h2>Revistas</h2>
		</header>
		<div id="postsWrapper" class="pod-magazines--wrapper">
			<?php 
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array( 'post_type' => 'revistas', 'posts_per_page' => 12, 'paged' => $paged);
				$query = new WP_Query( $args );
				while ( $query->have_posts() ) : $query->the_post();

					$def = '#d84e65';
					$color = get_field('color_item');
					$hover;

					if ($color) {
						$hover = get_field('color_item');
					} else {
						$hover = $def;
					}
					
			?>
				<article class="pod-magazines--item">
					<figure class="pod-magazines--thumb" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
						<a href="<?php the_permalink(); ?>"></a>
					</figure>
					<div class="pod-magazines--caption">
						<h3>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>				
						</h3>
						<?php the_excerpt(); ?>
					</div>
				</article>
			<?php
				endwhile;
			?>
			<?php if ( function_exists('bst_pagination') ) { bst_pagination(); } else if ( is_paged() ) { ?>
			  <ul class="pagination">
			    <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Anterior', 'bst')) ?></li>
			    <li class="newer"><?php previous_posts_link(__('Siguiente', 'bst') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
			  </ul>
			<?php } ?>
			<?php
				wp_reset_query();
			?>
		</div>
	</div>
</section>