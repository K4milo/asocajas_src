<?php

  $imagen_banner=get_field('imagen_banner');
  $informacion=get_field('info_banner');
 ?>

 <section id="bannersPortafolio">
   <div class="normativa__wrapper">
     <div class="normativa__wrapper-imagen">
       <img src="<?php echo $imagen_banner; ?>" alt="">
     </div>
     <div class="normativa__wrapper-info">
       <?php echo $informacion; ?>
     </div>
   </div>
 </section>
