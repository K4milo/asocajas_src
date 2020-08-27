<div class="map-wrapper">
	<div id="sidebar">
	    <h1>leaflet-sidebar</h1>
	</div>
	<div id="mapid"></div>
</div>

<?php if( have_rows('items_de_locacion', 'option') ): ?>
	<ul id="mapMarkers">
		<?php 
			$fdMap = get_field('items_de_locacion', 'option');

			while( have_rows('items_de_locacion', 'option') ): the_row(); ?>
			<li class="map-marker" data-lat-len="<?php the_sub_field('fd_lat-len'); ?>" data-name="<?php the_sub_field('fd_text'); ?>"><?php the_sub_field('fd_modal'); ?></li>
		<?php endwhile; ?>
	</ul>
<?php endif; ?>