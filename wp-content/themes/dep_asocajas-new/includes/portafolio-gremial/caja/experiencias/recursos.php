<section id="categorias">
  <div class="recursosE__wrapper">
    <?php
     while(have_rows('recursos')): the_row();
     ?>
    <div class="recursosE__wrapper-item">
      <p><?php the_sub_field('nombre') ?></p>
      <a href="<?php the_sub_field('documento') ?>">Descargar ></a>
    </div>
  <?php endwhile; ?>
  </div>
</section>
