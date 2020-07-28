<section id="organigrama"  class="container-fluid">
  <div class="organigrama__wrapper row">
    <div class="organigrama__wrapper-title">
      Organigrama
    </div>
    <div class="organigrama__wrapper-cajas ">
        <div class="banner__wrapper-cajas__item col-xs-12 col-md-6 col-lg-4">
          <img src="<?php echo get_template_directory_uri(); ?>/dev-front/images/brand/ejemplo.png" alt="">
          <h4>
            Asamblea
          </h4>
          <p>
            Orienta estratégicamente la gestión de la Asociación.
          </p>
        </div>
        <div class="banner__wrapper-cajas__item col-xs-12 col-md-6 col-lg-4">
          <img src="<?php echo get_template_directory_uri(); ?>/dev-front/images/brand/ejemplo.png" alt="">
          <h4>
            Asamblea
          </h4>
          <p>
            Orienta estratégicamente la gestión de la Asociación.
          </p>
        </div>
        <div class="banner__wrapper-cajas__item col-xs-12 col-md-6 col-lg-4">
          <img src="<?php echo get_template_directory_uri(); ?>/dev-front/images/brand/ejemplo.png" alt="">
          <h4>
            Asamblea
          </h4>
          <p>
            Orienta estratégicamente la gestión de la Asociación.
          </p>
        </div>
        <div class="banner__wrapper-cajas__item col-xs-12 col-md-6 col-lg-4">
          <img src="<?php echo get_template_directory_uri(); ?>/dev-front/images/brand/ejemplo.png" alt="">
          <h4>
            Asamblea
          </h4>
          <p>
            Orienta estratégicamente la gestión de la Asociación.
          </p>
        </div>
        <div class="banner__wrapper-cajas__item col-xs-12 col-md-6 col-lg-4">
          <img src="<?php echo get_template_directory_uri(); ?>/dev-front/images/brand/ejemplo.png" alt="">
          <h4>
            Asamblea
          </h4>
          <p>
            Orienta estratégicamente la gestión de la Asociación.
          </p>
        </div>
        <div class="banner__wrapper-cajas__item col-xs-12 col-md-6 col-lg-4">
          <img src="<?php echo get_template_directory_uri(); ?>/dev-front/images/brand/ejemplo.png" alt="">
          <h4>
            Asamblea
          </h4>
          <p>
            Orienta estratégicamente la gestión de la Asociación.
          </p>
        </div>
        <div class="banner__wrapper-cajas__item col-xs-12 col-md-6 col-lg-4">
          <img src="<?php echo get_template_directory_uri(); ?>/dev-front/images/brand/ejemplo.png" alt="">
          <h4>
            Asamblea
          </h4>
          <p>
            Orienta estratégicamente la gestión de la Asociación.
          </p>
        </div>
        <div class="banner__wrapper-cajas__item col-xs-12 col-md-6 col-lg-4">
          <img src="<?php echo get_template_directory_uri(); ?>/dev-front/images/brand/ejemplo.png" alt="">
          <h4>
            Asamblea
          </h4>
          <p>
            Orienta estratégicamente la gestión de la Asociación.
          </p>
        </div>
    </div>
  </div>
</section>






<section id="afiliadas"  class="container-fluid">
  <div class="afiliadas__wrapper row">
    <div class="afiliadas__wrapper-title">
      <?php echo the_sub_field('titulo') ?>
      Nuestras Afiliadas
    </div>
    <p>
      A continuación, encontrará nuestras 35 Cajas de Compensación Familiar afiliadas a nivel nacional.
    </p>
    <div class="afiliadas__wrapper-cajas ">
      <?php
       while(have_rows('cajas')): the_row();
       ?>
        <div class="banner__wrapper-cajas__item col-xs-12 col-md-6 col-lg-3">
          <img src="<?php the_sub_field('logo') ?>" alt="">
        </div>
      <?php endwhile;?>
    </div>
    

  </div>
  <a href="javascript:void(0);" class="see_more">
      Ver todas
    </a>
</section>
