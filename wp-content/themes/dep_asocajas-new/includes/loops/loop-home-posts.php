<?php
//

/*
	Loop for home

*/

?>

<section id="HomePost">
	<div class="container-fluid home-news">
		<header>
			<h2>Noticias</h2>
		</header>
		<?php
				$args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
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
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-lg-6">
					<div class="box_news_big">
						<div class="box_bg" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
						</div>
						<div class="box_padding">
							<div class="date_news">
								<?php the_time('F j, Y'); ?>
							</div>
							<div class="title_news">
								<?php the_title(); ?>
							</div>
							<div class="link_news">
								<a href="<?php the_permalink(); ?>">
									Leer la noticia >
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-6">
					<div class="row">
						<div class="box_news_small">
							<div class="box_bg" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
							</div>
							<div class="box_padding">
								<div class="date_news">
									<?php the_time('F j, Y'); ?>
								</div>
								<div class="title_news">
									<?php the_title(); ?>
								</div>
								<div class="link_news">
									<a href="<?php the_permalink(); ?>">
										Leer la noticia >
									</a>
								</div>
							</div>
						</div>

						<div class="box_news_small">
							<div class="box_bg" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
							</div>
							<div class="box_padding">
								<div class="date_news">
									<?php the_time('F j, Y'); ?>
								</div>
								<div class="title_news">
									<?php the_title(); ?>
								</div>
								<div class="link_news">
									<a href="<?php the_permalink(); ?>">
										Leer la noticia >
									</a>
								</div>
							</div>
						</div>

						<div class="box_news_small">
							<div class="box_bg" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
							</div>
							<div class="box_padding">
								<div class="date_news">
									<?php the_time('F j, Y'); ?>
								</div>
								<div class="title_news">
									<?php the_title(); ?>
								</div>
								<div class="link_news">
									<a href="<?php the_permalink(); ?>">
										Leer la noticia >
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="home-news--wrapper">
		
				<article class="home-news--item">
					<div class="home-news--overlay">
						<span class="overlap-bg" style="background-color: <?php echo $hover; ?>"></span>
						<div class="over-text">
							<span class="over-text--center">
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="more-link">
									Leer Más
									<span class="more-icon"></span>
								</a>
							</span>
						</div>
					</div>
					<figure class="home-news--thumb" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
						<a href="<?php the_permalink(); ?>"></a>
					</figure>
					<div class="home-news--caption">
						<h3>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<h4>
							<?php the_time('F j, Y'); ?>
						</h4>
					</div>
				</article>
			
		</div>
		
		<?php
			endwhile;
			wp_reset_query();
		?>
		<div class="boton-mas text-center">
			<a class="home-event--link" href="https://www.asocajas.org.co/sala-de-prensa/">VER MÁS NOTICIAS</a>
		</div>
	</div>
</section>
