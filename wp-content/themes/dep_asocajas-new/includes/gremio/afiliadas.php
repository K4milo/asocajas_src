<section id="afiliadas">
  <div class="afiliadas__wrapper">
    <div class="afiliaas__wrapper-title">
      <?php echo the_sub_field('titulo') ?>
    </div>
    <div class="afiliadas__wrapper-cajas">
      <?php
       while(have_rows('cajas')): the_row();
       ?>
        <div class="banner__wrapper-cajas__item">
          <img src="<?php the_sub_field('logo') ?>" alt="">
        </div>
      <?php endwhile;?>
    </div>

  </div>
</section>
