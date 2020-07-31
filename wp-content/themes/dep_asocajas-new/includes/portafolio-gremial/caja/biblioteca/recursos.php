<section id="categorias">
  <div class="recursosB__wrapper">
    <?php
     while(have_rows('recursos')): the_row();
     ?>
    <div class="recursosB__wrapper-item">
      <p><?php the_sub_field('nombre') ?></p>
      <a href="<?php the_sub_field('documento') ?>">Descargar ></a>
    </div>
  <?php endwhile; ?>
  </div>
</section>
