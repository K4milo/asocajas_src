<?php
	
	/*
		Fields
		titulo_mesa
		titulo_junta
		icono_directiva
		icono_lista
		mesa_directiva
			nombre
			caja_compensacion
			link_caja
		junta_directiva
			nombre
			caja_compensacion
			link_caja
	*/

	$titulo_mesa = get_field('titulo_mesa');
	$titulo_junta = get_field('titulo_junta');
	$icono_directiva = get_field('icono_directiva');
	$icono_lista = get_field('icono_lista');
	$mesa_directiva = get_field('mesa_directiva');
	$junta_directiva = get_field('junta_directiva');

?>

<section class="top-directives">
	<header>
		<h2><?php the_title(); ?></h2>
	</header>
	<div class="top-directives-wrapper container">
		<?php
			if($icono_directiva):
		?>
		<div class="top-directives-item image"><img src="<?php echo $icono_directiva; ?>" alt="Imagen <?php the_title(); ?>"></div>
		<?php endif;?>
		<div class="top-directives-item text-list">
			<ul>	
			<?php
				if($mesa_directiva):
					while(have_rows('mesa_directiva')): the_row();
						$nombre = get_sub_field('nombre');
						$caja_compensacion = get_sub_field('caja_compensacion');
						$link_caja = get_sub_field('link_caja');
					?>
					<li><strong><?php echo $nombre; ?></strong><a href="<?php echo $link_caja; ?>" target="_blank"><?php echo $caja_compensacion; ?></a></li>
				<?php endwhile; ?>
			<?php endif; ?>
			</ul>
		</div>
	</div>
</section>

<section class="bottom-directives">
	<header>
		<h2><?php echo $titulo_mesa; ?></h2>
	</header>
	<div class="bottom-directives-wrapper container">
		<div class="bottom-directives-item text-list">
			<div class="bottom-directives-item image"><img src="<?php echo $icono_lista; ?>" alt="Imagen <?php echo $titulo_mesa; ?>"></div>
			<ul>	
			<?php
				if($junta_directiva):
					while(have_rows('junta_directiva')): the_row();
						$nombre = get_sub_field('nombre');
						$caja_compensacion = get_sub_field('caja_compensacion');
						$link_caja = get_sub_field('link_caja');
					?>
					<li><strong><?php echo $nombre; ?></strong><a href="<?php echo $link_caja; ?>" target="_blank"><?php echo $caja_compensacion; ?></a></li>
				<?php endwhile; ?>
			<?php endif; ?>
			</ul>
		</div>
	</div>
</section>
