<section id="banners">
  <div class="banner__wrapper container">
    <div class="banner__wrapper-item row">
      <div class="imagen col-xs-12 col-md-6 col-lg-6">
        <img src="<?php the_field('imagen_banner') ?>" alt="">
      </div>
      <div class="informacion col-xs-12 col-md-6 col-lg-6" >
        <?php the_field('info_banner') ?>
      </div>
    </div>
  </div>
</section>
