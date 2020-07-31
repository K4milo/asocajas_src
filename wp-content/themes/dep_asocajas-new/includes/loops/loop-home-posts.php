<?php
//

/*
	Loop for home

*/

?>

<section id="HomePost">
	<div class="container home-news">
		<header>
			<h2>Noticias</h2>
		</header>
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
					<div class="row mobile">
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
			<?php
				$args = array( 'post_type' => 'post', 'posts_per_page' => 6 );
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
				<article class="home-news--item">
					<figure class="pod-news--thumb" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">

					</figure>

					<div class="home-news--caption">
						<p>
							<?php the_time('F j, Y'); ?>
						</p>
						<h3>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<div class="ver-mas">
							<a href="<?php the_permalink(); ?>">Leer la noticia ></a>
						</div>
					</div>
				</article>
			<?php
				endwhile;
				wp_reset_query();
			?>
		</div>
	</div>
</section>
