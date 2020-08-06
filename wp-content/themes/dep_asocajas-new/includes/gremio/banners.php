<?php     $cont=0;
     while(have_rows('banner')): the_row();
     $cont++;
 ?>
<section id="banner<?php echo $cont; ?>">
  <div class="banner__wrapper container">
    <div class="banner__wrapper-item row banner">
      <div class="imagen col-xs-12 col-md-6 col-lg-6">
        <img src="<?php the_sub_field('imagen') ?>" alt="">
      </div>
      <div class="informacion col-xs-12 col-md-6 col-lg-6" >
        <?php the_sub_field('info') ?>
      </div>
    </div>
  </div>
</section>
  <?php endwhile;?>
