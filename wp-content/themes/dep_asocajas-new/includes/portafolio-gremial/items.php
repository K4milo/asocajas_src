<section id="categorias" class="cards--portfolio cards__wrapper">
  <div class="cards--portfolio__wrapper">
    <?php
     while(have_rows('categorias')): the_row();
     ?>
    <div class="cards--portfolio__item">
      <figure class="cards--portfolio__image">
        <img src="<?php the_sub_field('icono') ?>" alt="">
      </figure>
      <div class="cards--portfolio__caption">
        <?php the_sub_field('informacion') ?>
      </div>
    </div>
  <?php endwhile; ?>
  </div>
</section>
