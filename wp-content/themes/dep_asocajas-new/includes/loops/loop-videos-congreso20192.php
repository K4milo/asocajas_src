<?php
//

/*
	Loop for Videos

*/

?>

<section id="VideoPost">
	<div class="container video-news">
		<header>
			<h2>Videos día 2</h2>
		</header>
		<div class="video-news--wrapper">
			<?php
				$args = array( 'post_type' => 'videos','category_name' => 'congreso20192', 'posts_per_page' => -1 );
				$query = new WP_Query( $args );
				while ( $query->have_posts() ) : $query->the_post();
					$yt_id = get_field('youtube_id');
			?>
				<article class="video-news--item">
					<figure class="video-news--thumb" style="background-image:url('https://i.ytimg.com/vi/<?php echo $yt_id; ?>/hqdefault.jpg')">
						<a data-fancybox href="https://www.youtube.com/watch?v=<?php echo $yt_id; ?>"></a>
					</figure>
					<div class="video-news--caption">
						<h3>
							<?php the_title(); ?>
						</h3>
					</div>
				</article>
			<?php
				endwhile;
				wp_reset_query();
			?>
		</div>
	</div>
</section>
