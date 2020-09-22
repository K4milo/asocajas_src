<?php
/*
The Search Loop
===============
*/
?>
<div class="home-news">
    <div class="row mobile">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article class="box_news_small">
                <div class="box_bg" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
                    <a href="<?php the_permalink(); ?>">
                    </a>
                </div>
                <div class="box_padding">
                    <div class="date_news">
                        <?php the_time('m/d/y'); ?>| NOTICIA
                    </div>
                    <div class="title_news">
                        <?php the_title(); ?>
                    </div>
                    <div class="link_news">
                        <a href="<?php the_permalink(); ?>">
                            Ver más >
                        </a>
                    </div>
                </div>
            </article>
        <?php endwhile; else: ?>
            <div class="alert alert-warning">
                <i class="glyphicon glyphicon-exclamation-sign"></i> <?php _e('Sorry, your search yielded no results.', 'bst'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>