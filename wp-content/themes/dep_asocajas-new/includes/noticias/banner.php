<?php

  $imagen_banner=get_field('imagen_banner');
  $informacion=get_field('info_banner');
 ?>

 <section id="banners">
   <div class="noticias__wrapper container">
     <div class="noticias__wrapper-imagen  col-xs-12 col-md-6 col-lg-6 text-center">
       <img src="<?php echo $imagen_banner; ?>" alt="">
     </div>
     <div class="contacto__wrapper-info  col-xs-12 col-md-6 col-lg-6">
       <?php echo $informacion; ?>
     </div>
   </div>
 </section>
