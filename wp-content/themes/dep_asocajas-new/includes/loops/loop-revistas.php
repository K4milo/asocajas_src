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
		<div class="wrapper-form filter filter--magazine">
			<form id="FilterTop" action="<?php the_permalink()?>" method="post">
				<div class="form-item form-item--select">
					<select required name="register_cat">
						<option value="">Edición</option>
						<option value="34">Edición 34</option>
						<option value="35">Edición 35</option>
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
							'post_type' => 'Revistas',
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
							'post_type' => 'Revistas',
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
						'post_type' => 'revistas',
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
						</div>
						<div class="box_padding">
							<div class="date_news">
								<?php the_time('m/d/y'); ?>| REVISTA
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
