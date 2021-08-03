<?php

	// Filter component by date
	setlocale(LC_ALL,"es_ES");
	$cat = (isset($_POST['register_cat'])) ? $_POST['register_cat'] : 'all';
	$args;
	$paged = (get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$editions = get_terms(array('taxonomy' => 'edicion-revista'));

?>

<section id="MainPost">
	<div class="container pod-news">
		<header>
			<?php if($month): ?>
				<h3>Notas emitidas en <?php echo ucfirst($monthName); ?> de <?php echo $year; ?></h3>
			<?php endif; ?>
		</header>
		<div class="wrapper-form--search"><?php get_search_form(); ?></div>
		<div class="wrapper-form filter filter--magazine">
			<form id="FilterTop" action="<?php the_permalink()?>" method="post">
				<div class="form-item form-item--select">
					<select required name="register_cat">
						<option value="">Edición</option>
						<option value="all">Todas</option>
						<?php
						foreach ( $editions as $edition ):
						?>
							<option value="<?php echo $edition->slug; ?>"><?php echo $edition->name; ?></option>
						<?php
						endforeach;
						?>
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

				if($cat != 'all') {
					$args = array (
						'post_type' => 'revistas',
						'posts_per_page' => 6,
						'paged'          => $paged,
						'tax_query' => array(
							array (
								'taxonomy' => 'edicion-revista',
								'field' => 'slug',
								'terms' => $cat,
							)
						),
					);

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
				<h2>Noticias Destacadas</h2>
			</header>
			<div  class="pod-news--wrapper">
				<?php
				$args = array (
					'post_type' => 'post',
					'posts_per_page' => 2,
					'category_name' => 'destacado'
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
											 <?php the_time('d/m/Y'); ?>| NOTICIA
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
			 <?php endwhile; ?>
			 <?php endif;
							wp_reset_query();
			 ?>
			</div>
		</div>
	</div>
</section>
