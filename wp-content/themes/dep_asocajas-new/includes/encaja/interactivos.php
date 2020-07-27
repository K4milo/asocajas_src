<?php
  $time_img=get_field('imagen_timeline');
  $time_info=get_field('info_timeline');
  $mapa_img=get_field('imagen_mapa');
  $mapa_info=get_field('info_mapa');
 ?>
<section id="interactivos" class="container-fluid">
  <div class="row">
    <div class="time__wrapper col-xs-12 col-md-6 col-lg-6">
      <div class="time__wrapper-img">
        <img src="<?php echo $time_img; ?>" alt="">
      </div>
      <div class="time__wrapper-info">
        <?php echo $time_info; ?>
      </div>
    </div>
    <div class="map__wrapper col-xs-12 col-md-6 col-lg-6">
      <div class="map__wrapper-img">
        <img src="<?php echo $mapa_img; ?>" alt="">
      </div>
      <div class="map__wrapper-info">
        <?php echo $mapa_info; ?>
      </div>
    </div>
  </div>
</section>
