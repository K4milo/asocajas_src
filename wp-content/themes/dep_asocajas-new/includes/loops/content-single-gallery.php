<section id="GalleryArticles" class="container gallery-loop">
    <?php
    
    $files = get_field('imagenes');

    if($files):
        while(have_rows('imagenes')): the_row();
            $image = get_sub_field('imagen');
            
            // vars
            $url = $image['url'];

            // thumbnail
            $size = 'medium';
            $thumb = $image['sizes'][$size];
    ?>
        <article class="gallery-loop-item" style="background-image: url('<?php echo $thumb; ?>')">
            <a data-fancybox href="<?php echo $url; ?>" data-fancybox="gallery"></a>        
        </article>
    <?php
        endwhile;
    endif;
    ?>
</section>