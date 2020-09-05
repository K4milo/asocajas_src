<?php get_template_part('includes/header'); ?>

<div class="container-fluid">
  <div class="row">

    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'single-revista'); ?>
      </div><!-- /#content -->
    </div>

    <div class="col-xs-12 col-sm-4" id="sidebar2" role="navigation">
      <header>
        <h4>Otros Articulos</h4>
      </header>
      <?php
      $args = array (
        'post_type' => 'Revistas',
        'posts_per_page' => 4
      );
      $query = new WP_Query( $args );

      if($query->have_posts()):

      while ( $query->have_posts() ) : $query->the_post();
       ?>
      <div class=" home-news">
            <div class="row mobile">
              <div class="box_news_small">
                <div class="box_bg" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
                  <a href="<?php the_permalink(); ?>">
                  </a>
                </div>
                <div class="box_padding">
                  <div class="date_news">
                    <?php the_time('d/m/Y'); ?>| REVISTA
                  </div>
                  <div class="title_news">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>

                  </div>
                  <div class="link_news">
                    <a href="<?php the_permalink(); ?>">
                      Leer la revista >
                    </a>
                  </div>
                </div>
              </div>
            </div>
      </div>
    <?php endwhile; ?>
  <?php endif;
         wp_reset_query();
  ?>
  <header>
    <h4>Otras Noticias</h4>
  </header>
  <?php
  $args = array (
    'post_type' => 'post',
    'posts_per_page' => 2
  );
  $query = new WP_Query( $args );

  if($query->have_posts()):

  while ( $query->have_posts() ) : $query->the_post();
   ?>
  <div class=" home-news">
        <div class="row mobile">
          <div class="box_news_small">
            <div class="box_bg" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
              <a href="<?php the_permalink(); ?>">
              </a>
            </div>
            <div class="box_padding">
              <div class="date_news">
                <?php the_time('m/d/y'); ?>| REVISTA
              </div>
              <div class="title_news">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>

              </div>
              <div class="link_news">
                <a href="<?php the_permalink(); ?>">
                  Leer la revista >
                </a>
              </div>
            </div>
          </div>
        </div>
  </div>

<?php endwhile; ?>
<?php endif;
     wp_reset_query();
?>
<a href="https://www.asocajas.org.co/noticias/"> <img src="https://www.asocajas.org.co/wp-content/uploads/2020/08/banner-mini-noticias_1.png" alt=""> </a>

    </div>  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
