<?php

  $imagen_banner=get_field('imagen_contacto');
  $informacion=get_field('informacion_contacto');
 ?>

 <section id="banner-noticias">
   <div class="contacto__wrapper">
     <div class="contacto__wrapper-imagen">
       <img src="<?php echo $imagen_banner; ?>" alt="">
     </div>
     <div class="contacto__wrapper-info">
       <?php echo $informacion; ?>
     </div>
   </div>
 </section>
