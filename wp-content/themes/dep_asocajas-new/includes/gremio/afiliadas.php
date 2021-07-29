<section id="afiliadas"  class="container-fluid">
  <div class="afiliadas__wrapper row">
    <div class="afiliadas__wrapper-title">
      <?php  the_field('titulo') ?>
    </div>
    <div class="afiliadas__wrapper-cajas ">

      <?php
       while(have_rows('cajas')): the_row();
       ?>
        <div class="banner__wrapper-cajas__item">
          <a href="<?php the_sub_field('url') ?>">
            <img src="<?php the_sub_field('logo') ?>" alt="">
          </a>

        </div>
      <?php endwhile;?>

    </div>


  </div>
  <a href="javascript:void(0);" class="see_more">
      Ver todas
    </a>
</section>
