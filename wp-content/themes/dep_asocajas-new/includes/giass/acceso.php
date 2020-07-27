<?php

  $imagen_banner=get_field('imagen_acceso');
  $informacion=get_field('info_acceso');
 ?>

 <section id="acceso-giass" class="container-fluid">
   <div class="acceso__wrapper row">
     <div class="acceso__wrapper-imagen col-xs-12 col-md-6 col-lg-6">
       <img src="<?php echo $imagen_banner; ?>" alt="">
     </div>
     <div class="acceso__wrapper-info col-xs-12 col-md-6 col-lg-6">
       <?php echo $informacion; ?>
     </div>
   </div>
 </section>
