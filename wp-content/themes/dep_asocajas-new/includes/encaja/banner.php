<?php

  $imagen_banner=get_field('imagen_banner');
  $informacion=get_field('info_banner');
 ?>

 <section id="banner-encaja" class="container-fluid">
   <div class="encaja__wrapper row">
     <div class="encaja__wrapper-imagen col-xs-12 col-md-6 col-lg-6">
       <img src="<?php echo $imagen_banner; ?>" alt="">
     </div>
     <div class="encaja__wrapper-info col-xs-12 col-md-6 col-lg-6">
       <?php echo $informacion; ?>
     </div>
   </div>
 </section>
