<section id="ResearchArticles" class="container research">
    <?php
    
    $files = get_field('archivo');

    if($files):
        while(have_rows('archivo')): the_row();
            $title = get_sub_field('titulo_archivo');
            $file = get_sub_field('archivo');
    ?>
        <article class="research-item">
            <a href="<?php echo $file; ?>" target="_blank">
                <span><?php echo $title; ?></span>
            </a>        
        </article>
    <?php
        endwhile;
    endif;
    ?>
</section>