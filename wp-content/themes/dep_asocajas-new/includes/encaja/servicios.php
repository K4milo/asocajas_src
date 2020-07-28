<section id="servicios">
  <div class="container">
    <h3>
      Servicios y Beneficios
    </h3>
    <div class="servicios__wrapper row">
      <?php
      while(have_rows('servicios')): the_row();
      ?>
        <div class="servicios__wrapper-item col-xs-12 col-md-4 col-lg-4">
          <div class="box_servicios">
            <figure>
              <img src="<?php the_sub_field('imagen') ?>" alt="">
            </figure>
            <div class="servicios__wrapper-item-info">
            <?php the_sub_field('informacion') ?>
            </div>
          </div>
        </div>
      <?php endwhile;?>
    </div>
  </div>
</section>
