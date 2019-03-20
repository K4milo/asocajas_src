<?php
/*
	Campos Evento

	fondo_evento
	texto_evento
	fecha_grande
	fecha_pequena
	vinculo_evento
	vinculo_compra

*/

	$fondo_evento = get_field('fondo_evento');
	$texto_evento = get_field('texto_evento');
	$fecha_grande = get_field('fecha_grande');
	$fecha_pequena = get_field('fecha_pequena');
	$vinculo_evento = get_field('vinculo_evento');
	$vinculo_compra = get_field('vinculo_compra');

	if($fondo_evento):

	?>

	<section id="homeEvent" class="home-event" style="background-image: url('<?php echo $fondo_evento; ?>')">
		<div class="home-event--caption">
			<div class="home-event--date">
				<span class="date-1"><?php echo $fecha_grande; ?></span>
				<span class="date-2"><?php echo $fecha_pequena; ?></span>
			</div>
			
			<span>EVENTO</span>
			<?php echo $texto_evento; ?>
			<?php if($vinculo_evento): ?><a href="<?php echo $vinculo_evento; ?>" class="home-event--link" target="_blank">Ver Detalle</a><?php endif; ?>
			<?php if($vinculo_compra): ?><a href="<?php echo $vinculo_compra; ?>" class="home-event--buy" target="_blank">Comprar</a><?php endif; ?>
		</div>

	</section>

	<?php

	endif;