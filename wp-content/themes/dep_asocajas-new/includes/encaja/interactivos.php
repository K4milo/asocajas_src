<?php
  $time_img=get_field('imagen_timeline');
  $time_info=get_field('info_timeline');
  $mapa_img=get_field('imagen_mapa');
  $mapa_info=get_field('info_mapa');
 ?>
<section id="interactivos">
  <div class="time__wrapper">
    <div class="time__wrapper-img">
      <img src="<?php echo $time_img; ?>" alt="">
    </div>
    <div class="time__wrapper-info">
      <?php echo $time_info; ?>
    </div>
  </div>
  <div class="map__wrapper">
    <div class="map__wrapper-img">
      <img src="<?php echo $mapa_img; ?>" alt="">
    </div>
    <div class="map__wrapper-info">
      <?php echo $mapa_info; ?>
    </div>
  </div>
</section>
