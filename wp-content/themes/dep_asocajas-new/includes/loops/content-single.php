<?php
/*
The Single Posts Loop
=====================
*/
?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <section id="PostDetail">
        <article role="article" id="post_<?php the_ID()?>" <?php post_class()?> class="post">
            <header>
                <h2><?php the_title()?></h2>            
            </header>
            <section>
                <figure class="post-image">
                    <?php the_post_thumbnail(); ?>
                </figure>
                <?php the_content()?>
            </section>
        </article>
    </section>
<?php // comments_template('/includes/loops/comments.php'); ?>
<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); ?>
<?php endif; ?>
