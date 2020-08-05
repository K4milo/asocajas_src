<?php

  $imagen_banner=get_field('imagen_banner');
  $informacion=get_field('info_banner');
 ?>

 <section id="banners" class="portafolio-banner">
  <div class="portafolio-banner__wrapper">
    <div class="portafolio-banner__imagen portafolio-banner--item">
      <img src="<?php echo $imagen_banner; ?>" alt="portafolio gremial">
    </div>
    <div class="portafolio-banner__info portafolio-banner--item">
      <?php echo $informacion; ?>
    </div>
  </div>
</section>
