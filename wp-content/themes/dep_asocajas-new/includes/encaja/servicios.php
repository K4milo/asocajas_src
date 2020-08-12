<section id="servicios">
  <div class="container">
    <h3>
      Servicios y Beneficios
    </h3>
    <div class="servicios__wrapper row">
      <?php
      $cont=0;
      while(have_rows('servicios')): the_row();
      $cont++;
      ?>
      <div id="inline<?php echo $cont; ?>" class="" style="display:none;width:80%;">
       <div class="popup">
         <hr>
         <a class="close" href="#">&times;</a>
         <div class="content row">
           <img src="<?php the_sub_field('popup') ?>" alt="">
         </div>
       </div>
     </div>
        <div class="servicios__wrapper-item col-xs-12 col-md-4 col-lg-4">
          <div class="box_servicios">
            <figure>
              <a data-fancybox href="<?php the_sub_field('popup') ?>"><img src="<?php the_sub_field('imagen') ?>" alt=""></a>
            </figure>
            <div class="servicios__wrapper-item-info">
              <a data-fancybox href="<?php the_sub_field('popup') ?>"><?php the_sub_field('informacion') ?></a>
            </div>
          </div>
        </div>
      <?php endwhile;?>
    </div>
  </div>
</section>
