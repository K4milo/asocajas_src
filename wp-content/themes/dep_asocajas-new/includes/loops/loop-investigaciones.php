<?php
// investigacion

/*
  Variables
  primer_icono
  texto_principal
  segundo_icono


*/

$primer_icono = get_field('primer_icono');
$texto_principal = get_field('texto_principal');
$segundo_icono = get_field('segundo_icono');

?>

<?php

$args = array (
  'post_type' => 'investigaciones',
  'posts_per_page' => 10);

$query = new WP_Query($args);

?>
<section id="tipo-contenido" class="investigaciones">
  <?php

  if($query->have_posts()):
    while($query->have_posts()): $query->the_post();

    /* Variables of post
      icono_color
      icono_blanco
      archivo (field_repeater)
    */

    $icono_color = get_field('icono_color');
    $icono_blanco  = get_field('icono_blanco');

  ?>
  
  <article class="investigaciones-block" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
      <a href="<?php the_permalink() ?>">
        <img src="<?php echo $icono_color ?>" alt="<?php the_title();?>" class="investigaciones-block--color">
        <img src="<?php echo $icono_blanco ?>" alt="<?php the_title();?>" class="investigaciones-block--white">
      </a>
      
      <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>
  </article>
  
  <?php endwhile;?>
</section>

<?php endif;
