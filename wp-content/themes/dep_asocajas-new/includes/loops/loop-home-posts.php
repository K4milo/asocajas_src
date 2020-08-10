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
						<div class="box_bg" style="background-image:url('https://www.asocajas.org.co/wp-content/uploads/2020/04/Banner-comunicado-proteccion-02.png')">
						</div>
						<div class="box_padding">
							<div class="date_news">
								Abril 29, 2020| NOTICIA
							</div>
							<div class="title_news">
Balance del beneficio económico de emergencia. la clase trabajadora vulnerable también requiere un plan de salvamento							</div>
							<div class="link_news">
								<a href="https://www.asocajas.org.co/balance-del-beneficio-economico-de-emergencia-la-clase-trabajadora-vulnerable-tambien-requiere-un-plan-de-salvamento-2/">
									Leer la noticia >
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-6">
					<div class="row mobile">
						<div class="box_news_small">
							<div class="box_bg" style="background-image:url('https://www.asocajas.org.co/wp-content/uploads/2020/04/Banner-comunicado-salud-noticia-02.png')">
							</div>
							<div class="box_padding">
								<div class="date_news">
									Abril 29, 2020| NOTICIA
								</div>
								<div class="title_news">
Cajas de compensación familiar fortalecen servicios de salud para garantizar protección a millones de colombianos								</div>
								<div class="link_news">
									<a href="https://www.asocajas.org.co/cajas-de-compensacion-familiar-fortalecen-servicios-de-salud-para-garantizar-proteccion-a-millones-de-colombianos/">
										Leer la noticia >
									</a>
								</div>
							</div>
						</div>

						<div class="box_news_small">
							<div class="box_bg" style="background-image:url('https://www.asocajas.org.co/wp-content/uploads/2020/04/balance-home.png')">
							</div>
							<div class="box_padding">
								<div class="date_news">
									Abril 22, 2020| NOTICIA
								</div>
								<div class="title_news">
									Balance del beneficio económico de emergencia. la clase trabajadora vulnerable también requiere un plan de salvamento							</div>
								</div>
								<div class="link_news">
									<a href="https://www.asocajas.org.co/balance-del-beneficio-economico-de-emergencia-la-clase-trabajadora-vulnerable-tambien-requiere-un-plan-de-salvamento/">
										Leer la noticia >
									</a>
								</div>
							</div>
						</div>

						<div class="box_news_small">
							<div class="box_bg" style="background-image:url('https://www.asocajas.org.co/wp-content/uploads/2020/04/Banner-Directorio-Cajas-de-Compensaci%C3%B3n-Familiar-2-1.jpg')">
							</div>
							<div class="box_padding">
								<div class="date_news">
									Abril 4, 2020| NOTICIA
								</div>
								<div class="title_news">
									Directorio
								</div>
								<div class="link_news">
									<a href="https://www.asocajas.org.co/directorio/">
										Leer la noticia >
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--<div class="home-news--wrapper">
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
		</div>-->
		<a href="https://www.asocajas.org.co/noticias/" class="news_see_more">
			<img class="desktop" src="<?php echo get_template_directory_uri(); ?>/dev-front/images/bgs/news.png" alt="">
			<img class="mobile" src="<?php echo get_template_directory_uri(); ?>/dev-front/images/bgs/news_mobile.png" alt="">
		</a>
	</div>
</section>
