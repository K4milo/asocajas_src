
<section id="banners">
  <div class="banner__wrapper container">
    <?php
     while(have_rows('banner')): the_row();
     ?>
      <div class="banner__wrapper-item row">
        <div class="imagen col-xs-12 col-md-6 col-lg-6">
          <img src="<?php the_sub_field('imagen') ?>" alt="">
        </div>
        <div class="informacion col-xs-12 col-md-6 col-lg-6" >
          <?php the_sub_field('info') ?>
        </div>
      </div>
    <?php endwhile;?>
  </div>
</section>

<section id="banners_white">
  <div class="banner__wrapper container">
    <?php
     while(have_rows('banner')): the_row();
     ?>
      <div class="banner__wrapper-item row">
        <div class="imagen col-xs-12 col-md-6 col-lg-6">
          <img src="<?php the_sub_field('imagen') ?>" alt="">
        </div>
        <div class="informacion col-xs-12 col-md-6 col-lg-6" >
          <?php the_sub_field('info') ?>
        </div>
      </div>
    <?php endwhile;?>
  </div>
</section>

<section id="banners_purple">
  <div class="banner__wrapper container">
    <?php
     while(have_rows('banner')): the_row();
     ?>
      <div class="banner__wrapper-item row">
        <div class="imagen col-xs-12 col-md-6 col-lg-6">
          <img src="<?php the_sub_field('imagen') ?>" alt="">
        </div>
        <div class="informacion col-xs-12 col-md-6 col-lg-6" >
          <?php the_sub_field('info') ?>
        </div>
      </div>
    <?php endwhile;?>
  </div>
</section>

