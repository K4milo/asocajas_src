<section id="banners-historia">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-6 text-center">
        <img src="<?php the_field('imagen_banner') ?>" alt="">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-6">
        <?php the_field('info_banner') ?>
      </div>
    </div>
  </div>
</section>

<section id="fechas">
  <div class="container">
    <div class="row">
      <?php
       while(have_rows('fechas')): the_row();
       ?>
       <div class="fechas-item">
         <div class="icono">
           <img src="<?php the_sub_field('icono') ?>" alt="">
         </div>
         <div class="info">
           <h2 style="color:<?php the_sub_field('color') ?>"><?php the_sub_field('ano') ?></h2>
           <div class="texto">
             <?php the_sub_field('info') ?>
           </div>

         </div>
       </div>
     <?php endwhile; ?>
    </div>
  </div>
</section>
