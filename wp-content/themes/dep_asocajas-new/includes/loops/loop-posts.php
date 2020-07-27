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
			<h2>Noticias<?php if($cat && $cat != 'all'): ?> de <?php echo ucfirst($cat); ?> <?php endif; ?></h2>
			<?php if($month): ?>
				<h3>Notas emitidas en <?php echo ucfirst($monthName); ?> de <?php echo $year; ?></h3>
			<?php endif; ?>
		</header>
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
					<span><input type="submit" value="Filtrar"></span>
					<span><a href="<?php the_permalink()?>" class="reset-form">Reiniciar Filtro</a></span>
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
							'posts_per_page' => 9,
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
							'posts_per_page' => 9,
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
						'posts_per_page' => 9,
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
				<article class="pod-news--item">
					<div class="pod-news--overlay">
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
					<figure class="pod-news--thumb" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
						<a href="<?php the_permalink(); ?>"></a>
					</figure>
					<div class="pod-news--caption">
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
	</div>
</section>
