<section id="entes-reguladores" class="container">
  <div class="entes__wrapper">
    <div class="entes__wrapper-titulo">
      <header>
        <h3><?php the_field('titulo') ?></h3>
      </header>
    </div>
    <div class="row">
    <?php
     while(have_rows('entes')): the_row();
     ?>
      
        <div class="entes__wrapper-item col-xs-12 col-md-6 col-lg-4">
          <figure>
            <img src="<?php the_sub_field('imagen_ente') ?>" alt="">
          </figure>
        </div>
      
    <?php endwhile;?>
    </div>
  </div>
</section>
