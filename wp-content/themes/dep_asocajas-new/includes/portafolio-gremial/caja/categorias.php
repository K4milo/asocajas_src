<section id="categorias">
  <div class="cards__wrapper container">
    <?php
     while(have_rows('categorias')): the_row();
     ?>
     <article class="col-md-3">
      <div class="cards-pod">
        <figure class="cards-pod__image">
          <img src="<?php the_sub_field('icono') ?>" alt="">
        </figure>
        <div class="cards-pod__caption">
          <?php the_sub_field('informacion') ?>
        </div>
      </div>
     </article>
    <?php endwhile; ?>
  </div>
</section>
