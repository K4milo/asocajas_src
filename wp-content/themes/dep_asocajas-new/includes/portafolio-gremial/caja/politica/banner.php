<?php

  $imagen_banner=get_field('imagen_banner');
  $informacion=get_field('info_banner');
 ?>

<section id="bannersPortafolio" class="banner--white">
  <div class="banner--white__wrapper">
    <div class="banner--white__image banner--white--item">
      <img src="<?php echo $imagen_banner; ?>" alt="">
    </div>
    <div class="banner--white__info">
      <?php echo $informacion; ?>
    </div>
  </div>
</section>
