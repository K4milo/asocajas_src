<section id="categorias" class="cards__wrapper">
  <div class="container">
    <?php
     while(have_rows('recursos')): the_row();
     ?>
    <article class="col-md-2">
      <div class="cards--resources">
        <figure>
          <img src="<?php bloginfo('template_url');?>/img/icons/document.svg" alt="<?php the_sub_field('nombre') ?>"/>
        </figure>
        <p><?php the_sub_field('nombre') ?></p>
        <a href="<?php the_sub_field('documento') ?>">Descargar ></a>
      </div>
    </article>
  <?php endwhile; ?>
  </div>
</section>
