
<section id="SliderHome" class="slider row">
    <div class="slider__wrapper">
        <?php while(have_rows('slider_home')): the_row();?>
            <figure class="slider__wrapper-item">
                <?php if ( wp_is_mobile() ):?>
                    <img src="<?php the_sub_field('imgen_mobile')?>" alt="">
                <?php else: ?>
                    <img src="<?php the_sub_field('imagen_escritorio')?>" alt="">
                <?php endif;?>
            </figure>
        <?php endwhile;?>
    </div>
</section>
<?php
