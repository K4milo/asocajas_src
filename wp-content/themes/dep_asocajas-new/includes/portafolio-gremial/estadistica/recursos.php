<section id="recursos">
  <div class="recursosN__wrapper">
    <?php
     while(have_rows('recursos')): the_row();
     ?>
    <div class="recursosN__wrapper-item">
      <?php the_sub_field('informacion') ?>      
    </div>
  <?php endwhile; ?>
  </div>
</section>
