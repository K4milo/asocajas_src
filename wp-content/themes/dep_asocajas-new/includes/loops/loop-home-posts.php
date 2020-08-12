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
						<div class="box_bg" style="background-image:url('https://www.asocajas.org.co/wp-content/uploads/2020/08/Boletin-web.png')">
						</div>
						<div class="box_padding">
							<div class="date_news">
							08/05/20| NOTICIA
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
						<div class="box_bg" style="background-image:url('https://www.asocajas.org.co/wp-content/uploads/2020/08/Captura-1.png')">
							</div>
							<div class="box_padding">
								<div class="date_news">
								08/05/20| NOTICIA
								</div>
								<div class="title_news">
								Las Cajas de Compensación Familiar y la atención en salud durante el COVID-19							<div class="link_news">
									<a href="https://www.asocajas.org.co/casos-covid-19-en-el-pais-son-atendidos-en-su-mayoria-por-eps-de-las-cajas-de-compensacion/">
										Leer la noticia >
									</a>
								</div>
							</div>
						</div>

						<div class="box_news_small">
							<div class="box_bg" style="background-image:url('https://www.asocajas.org.co/wp-content/uploads/2020/08/comfanorte-01-1-1536x1078.png')">
							</div>
							<div class="box_padding">
								<div class="date_news">
									
									08/04/20| NOTICIA
								</div>
								<div class="title_news">
								    Comfanorte: dos décadas de crecimiento								</div>
								<div class="link_news">
									<a href="https://www.asocajas.org.co/comfanorte-dos-decadas-de-crecimiento/">
										Leer la noticia >
									</a>
								</div>
							</div>
						</div>

						<div class="box_news_small">
							<div class="box_bg" style="background-image:url('https://www.asocajas.org.co/wp-content/uploads/2020/08/Banner-comunicado-proteccion_v6-02-1536x1078.png')">
							</div>
							<div class="box_padding">
								<div class="date_news">
								    08/03/20| NOTICIA
								</div>
								<div class="title_news">
								   Con recursos propios, las Cajas financian el Subsidio de Emergencia al Cesante
								</div>
								<div class="link_news">
									<a href="https://www.asocajas.org.co/con-recursos-propios-las-cajas-financian-el-subsidio-de-emergencia-al-cesante/">
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
