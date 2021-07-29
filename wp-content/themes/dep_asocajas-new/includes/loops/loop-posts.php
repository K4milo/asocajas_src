<?php

	// Filter component by date
	setlocale(LC_ALL,"es_ES");

	$month = $_POST['register_month'];
	$year = $_POST['register_year'];
	$cat = $_POST['register_cat'];
	$date = DateTime::createFromFormat('!m', $month);
	$monthName = strftime('%B', mktime(0, 0, 0, $month));
	$args;
	$paged = (get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

?>

<section id="MainPost">
	<div class="container pod-news">
		<header>
			<?php if($month): ?>
				<h3>Notas emitidas en <?php echo ucfirst($monthName); ?> de <?php echo $year; ?></h3>
			<?php endif; ?>
		</header>
		<div class="wrapper-form--search"><?php get_search_form(); ?></div>
		<div class="wrapper-form filter">
			<form id="FilterTop" action="<?php the_permalink()?>" method="post">
				<div class="form-item form-item--select">
					<select required name="register_cat">
						<option value="">Categoría</option>
						<option value="all">Todas</option>
						<option value="asocajas">Asocajas</option>
						<option value="afiliadas">Afiliadas</option>
					</select>
				</div>
				<div class="form-item form-item--select">
					<select required name="register_month">
						<option value="">Mes</option>
						<option value="01">Enero</option>
						<option value="02">Febrero</option>
						<option value="03">Marzo</option>
						<option value="04">Abril</option>
						<option value="05">Mayo</option>
						<option value="06">Junio</option>
						<option value="07">Julio</option>
						<option value="08">Agosto</option>
						<option value="09">Septiembre</option>
						<option value="10">Octubre</option>
						<option value="11">Noviembre</option>
						<option value="12">Diciembre</option>
					</select>
				</div>
				<div class="form-item form-item--select">
					<select required name="register_year">
						<option value="">Año</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
					</select>
				</div>

				<div class="form-item form-item--actions">
					<span><input type="submit" value="Aplicar filtros"></span>
				</div>
			</form>
		</div>
		<div id="postsWrapper" class="pod-news--wrapper">

			<?php
				// Filter component by date

				if($month && $year && $cat) {

					if($cat != 'all'){
						$args = array (
							'post_type' => 'post',
							'posts_per_page' => 6,
							'paged'          => $paged,
							'category_name' => $cat,
							'date_query' => array(
							    array(
							    	'column'  => 'post_date',
							        'after' => $year.'-'.$month.'-'.'01',
							        'before' => $year.'-'.$month.'-'.'30',
							        'inclusive' => true,
							    ),
							),
						);
					} else {
						$args = array (
							'post_type' => 'post',
							'posts_per_page' => 6,
							'paged'          => $paged,
							'date_query' => array(
							    array(
							    	'column'  => 'post_date',
							        'after' => $year.'-'.$month.'-'.'01',
							        'before' => $year.'-'.$month.'-'.'30',
							        'inclusive' => true,
							    ),
							),
						);
					}

				} else {

					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 6,
						'paged'          => $paged,
					);
				}


				$query = new WP_Query( $args );



				if($query->have_posts()):

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
			<div class=" home-news">
						<div class="row mobile">
							<div class="box_news_small">
								<div class="box_bg" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
									<a href="<?php the_permalink(); ?>">
									</a>
								</div>
								<div class="box_padding">
									<div class="date_news">
										<?php the_time('d/m/Y'); ?>| NOTICIA
									</div>
									<div class="title_news">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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

			<?php
				endwhile;

				if (function_exists(custom_pagination)) {
					custom_pagination($query->max_num_pages, "", $paged);
				}

				wp_reset_query();
				else:
			?>
				<div class="no-content">
					<h2>No existen Notas de Prensa con ese criterio de fechas o categoría, por favor intenta de nuevo</h2>
				</div>
			<?php endif; ?>

		</div>
		<div id="destacados">
			<header>
				<h2>Artículos Destacados</h2>
			</header>
			<div  class="pod-news--wrapper">
				<?php
				$args = array (
					'post_type' => 'Revistas',
					'posts_per_page' => 2,
					'edicion-revista' => 'destacado'
				);
				$query = new WP_Query( $args );

				if($query->have_posts()):

				while ( $query->have_posts() ) : $query->the_post();
				 ?>
				 <div class=" home-news">
							 <div class="row mobile">
								 <div class="box_news_small">
									 <div class="box_bg" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
									 </div>
									 <div class="box_padding">
										 <div class="date_news">
											 <?php the_time('d/m/Y'); ?>| REVISTA
										 </div>
										 <div class="title_news">
											 <?php the_title(); ?>
										 </div>
										 <div class="link_news">
											 <a href="<?php the_permalink(); ?>">
												 Leer la revista >
											 </a>
										 </div>
									 </div>
								 </div>
							 </div>
				 </div>
			 <?php endwhile; ?>
			 <?php endif;
			 				wp_reset_query();
			 ?>
			</div>
		</div>

	</div>
</section>
