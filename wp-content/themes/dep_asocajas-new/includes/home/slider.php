
<section id="SliderHome" class="slider row">
    <div class="slider__wrapper">
        <?php while(have_rows('slider_home')): the_row();
          $hero_banner_video= get_sub_field('video')
        ?>
        <a href="<?php the_sub_field('link');?>">
        <figure class="slider__wrapper-item">
                <?php if ( wp_is_mobile() ):?>
                    <img src="<?php the_sub_field('imgen_mobile')?>" alt="">
                <?php else: ?>
                    <img src="<?php the_sub_field('imagen_escritorio')?>" alt="">
                    <?php if ($hero_banner_video) : ?>
                      <video autoplay loop muted>
                        <source src="<?php echo esc_url($hero_banner_video); ?>" type="video/mp4">
                      </video>
                    <?php endif; ?>
                <?php endif;?>
            </figure>
        </a>

        <?php endwhile;?>
    </div>
</section>
<?php
