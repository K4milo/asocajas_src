<section id="categorias">
  <div class="portafolioItems__wrapper">
    <?php
     while(have_rows('categorias')): the_row();
     ?>
    <div class="portafolioItems__wrapper-item">
      <figure>
        <img src="<?php the_sub_field('icono') ?>" alt="">
      </figure>
      <div class="caption">
        <?php the_sub_field('informacion') ?>
      </div>
    </div>
  <?php endwhile; ?>
  </div>
</section>
