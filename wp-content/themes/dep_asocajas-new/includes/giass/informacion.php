<?php

 ?>

 <section id="informacion-giass" class="container-fluid">
   <div class="informacionGiass__wrapper container">
     <div class="informacionGiass__wrapper-titulo">
       <?php the_field('titulo') ?>
     </div>
     <div class="informacionGiass__wrapper-controles row">
       <?php
        while(have_rows('items')): the_row();
        ?>
         <div class="informacionGiass__wrapper-controles-item col-xs-12 col-md-4 col-lg-4">
           <figure>
             <img src="<?php the_sub_field('icono') ?>" alt="">
           </figure>
           <div class="">
             <p><?php the_sub_field('info') ?></p>
           </div>
         </div>
       <?php endwhile;?>
     </div>
     <div class="informacionGiass__wrapper-alcance container">
       <?php the_field('alcance') ?>
     </div>
   </div>
 </section>
