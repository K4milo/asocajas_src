<section id="categorias">
  <div class="recursosP__wrapper">
    <?php
     while(have_rows('recursos')): the_row();
     ?>
    <div class="recursosP__wrapper-item">
      <p><?php the_sub_field('nombre') ?></p>
      <a href="<?php the_sub_field('documento') ?>">Descargar ></a>
    </div>
  <?php endwhile; ?>
  </div>
</section>
