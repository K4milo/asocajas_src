<section id="categorias">
  <div class="cards__wrapper container">
    <?php
     while(have_rows('recursos')): the_row();
     ?>
     <article class="col-md-6">
      <div class="cards-pod cards-pod__full">
        <div class="cards-pod__caption cards-pod__caption--full">
          <?php the_sub_field('informacion') ?>
        </div>
      </div>
     </article>
    <?php endwhile; ?>
  </div>
</section>
