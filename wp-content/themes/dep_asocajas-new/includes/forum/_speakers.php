<?php
/**
 * Speakers component
 *
*/

$speakers = get_field('speakers');

if($speakers) : ?>
  <section class="speakers">
    <header class="container speakers__headline">
      <h2>PONENTES</h2>
    </header>
    <div class="js-speakers">
    <?php
    while( have_rows('speakers') ) : the_row();
        $speaker_image = get_sub_field('speaker_photo');
        $speaker_name = get_sub_field('speaker_name');
        $speaker_title = get_sub_field('speaker_title'); ?>

    <div class="speakers__item">
      <img src="<?php echo $speaker_image['url']; ?>" alt="<?php echo $speaker_name; ?>">
      <!--div class="speakers__item-bg">
        <div class="speakers__caption">
          <h3 class="speakers__title">
            <?php echo $speaker_name; ?>
          </h3>
          <h4 class="speakers__subtitle">
            <?php echo $speaker_title; ?>
          </h4>
        </div>
      </div-->
    </div>
        <?php
    endwhile; ?>
    </div>
  </section>
    <?php
endif;
