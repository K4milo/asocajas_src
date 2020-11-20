<?php
/**
 * Hero banner component
 *
*/

$banner = get_field('banner');

if($banner) : ?>
  <section class="hero-banner hero-banner--forum">
    <?php
    while( have_rows('banner') ) : the_row();

        $banner_image = get_sub_field('banner_bg');
        $logo_asocajas = get_sub_field('banner_logo');
        $banner_logo = get_sub_field('banner_forum_logo');
        $banner_date = get_sub_field('banner_date'); ?>

    <div class="container-fluid">
      <div class="row hero-banner__image-bg"
            style="background-image: url(<?php echo $banner_image['url']; ?>)">
        <div class="hero-banner__caption">
          <div class="hero-banner__logo-top">
            <img src="<?php echo $logo_asocajas['url']; ?>" 
                alt="Asocajas">
          </div>
          <div class="hero-banner__logo-bottom">
            <img src="<?php echo $banner_logo['url']; ?>" 
                alt="<?php the_title() ?>">
          </div>
          <div class="hero-banner__date">
            <?php echo $banner_date; ?>
          </div>
        </div>
      </div>
    </div>
        <?php
    endwhile; ?>
  </section>
    <?php
endif;
