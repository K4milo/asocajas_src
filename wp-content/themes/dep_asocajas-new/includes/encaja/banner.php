<?php

  $imagen_banner=get_field('imagen_banner');
  $informacion=get_field('info_banner');
 ?>

 <section id="banner-encaja" class="">
   <div class="encaja__wrapper container">
    <div class="banner__wrapper-item row">
      <div class="encaja__wrapper-imagen col-xs-12 col-md-6 col-lg-6 text-center">
        <img src="<?php echo $imagen_banner; ?>" alt="">
      </div>
      <div class="encaja__wrapper-info col-xs-12 col-md-6 col-lg-6">
        <?php echo $informacion; ?>
      </div>
      </div>
   </div>
 </section>
