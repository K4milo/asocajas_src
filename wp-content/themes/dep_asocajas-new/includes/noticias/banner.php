<?php

  $imagen_banner=get_field('imagen_banner');
  $informacion=get_field('info_banner');
 ?>

 <section id="banners">
   <div class="noticias__wrapper">
     <div class="noticias__wrapper-imagen">
       <img src="<?php echo $imagen_banner; ?>" alt="">
     </div>
     <div class="contacto__wrapper-info">
       <?php echo $informacion; ?>
     </div>
   </div>
 </section>
