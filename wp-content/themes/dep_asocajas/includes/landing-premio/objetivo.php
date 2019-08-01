<?php
/*
	Campos
  objetivo
  iconos_objetivo (field_repeater)
    -icono
    -texto

*/
	$objetivo= get_field('objetivo');
  $iconos_objetivo= get_field('iconos_objetivo');

	?>
  <section id="objetivo">
    <div class="banner-objetivo">
      <div class="objetivo-info">
        <?php echo $objetivo; ?>
      </div>
      <div class="objetivo-iconos">
        <?php if($iconos_objetivo): ?>

        <?php

          while(have_rows('iconos_objetivo')): the_row();
            $icono = get_sub_field('icono');
            $texto = get_sub_field('texto');

        ?>
        <div class="objetivo-icono-item">
          <img src="<?php echo $icono; ?>" alt="">
          <p><?php echo $texto; ?></p>
        </div>
      <?php endif; ?>
      </div>
    </div>

  </section>