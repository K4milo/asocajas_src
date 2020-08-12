<?php

  $imagen_banner=get_field('imagen_contacto');
  $informacion=get_field('informacion_contacto');
 ?>

 <section id="contacto-banner">
   <div class="contacto__wrapper container">
     <div class="contacto__wrapper-imagen  col-xs-12 col-md-6 col-lg-6 text-center">
       <img src="<?php echo $imagen_banner; ?>" alt="">
     </div>
     <div class="contacto__wrapper-info  col-xs-12 col-md-6 col-lg-6">
       <?php echo $informacion; ?>
     </div>
   </div>
 </section>
