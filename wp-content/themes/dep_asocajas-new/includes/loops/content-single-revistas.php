<?php
/*
The Single Posts Loop
=====================
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <section id="PostDetailRevista" class="magazine-single">
        <article role="article" id="post_<?php the_ID()?>" <?php post_class()?> class="post">
            <header>
                <h2>titulo: <?php the_title()?></h2>
            </header>
            <div class="magazine-wrapper">
                <?php the_content()?>
            </div>
        </article>
    </section>
<?php // comments_template('/includes/loops/comments.php'); ?>
<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); ?>
<?php endif; ?>
