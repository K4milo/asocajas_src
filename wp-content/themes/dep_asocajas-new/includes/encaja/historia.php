<section id="banners">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-6">
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
         <figure>
           <img src="<?php the_sub_field('icono') ?>" alt="">
         </figure>
         <div class="info">
           <?php the_sub_field('info') ?>
         </div>
       </div>
     <?php endwhile; ?>
    </div>
  </div>
</section>
