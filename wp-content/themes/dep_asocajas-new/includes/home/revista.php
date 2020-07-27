<?php
    /*

            imagen_revista
            informacion_revista
            imagen_mobile
            texto_boton_mobile
            url_boton_mobile
    */
    $imagen_revista = get_field('imagen_revista');
    $informacion_revista = get_field('informacion_revista');
    $imagen_mobile = get_field('imagen_mobile');
    $texto_boton_mobile = get_field('texto_boton_mobile');
    $url_boton_mobile = get_field('url_boton_mobile');

?>
<section id="revista" class="slider row">
    <div class="revista__wrapper">
      <?php if ( wp_is_mobile() ):?>
        <figure>
          <img src="<?php echo $imagen_mobile; ?>" alt="">
          <a href="<?php echo $url_boton_mobile; ?>"><?php echo $texto_boton_mobile; ?></a>
        </figure>
        <?php else: ?>
          <div class="revista__wrapper-img">
            <img src=<?php echo $imagen_revista; ?> alt="">
          </div>
          <a class="link_home_orange" href="javascript:void(0);">
            Ir a la revista >
          </a>
      <?php endif;?>
    </div>
</section>
