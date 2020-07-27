<?php

 ?>

 <section id="informacion-giass" class="container-fluid">
   <div class="informacionGiass__wrapper">
     <div class="informacionGiass__wrapper-titulo">
       <?php the_field('titulo') ?>
     </div>
     <div class="informacionGiass__wrapper-controles row">
       <?php
        while(have_rows('items')): the_row();
        ?>
         <div class="informacionGiass__wrapper-controles-item col-xs-12 col-md-4 col-lg-4">
           <img src="<?php the_sub_field('icono') ?>" alt="">
           <p><?php the_sub_field('info') ?></p>
         </div>
       <?php endwhile;?>
     </div>
     <div class="informacionGiass__wrapper-alcance">
       <?php the_field('alcance') ?>
     </div>     
   </div>
 </section>
