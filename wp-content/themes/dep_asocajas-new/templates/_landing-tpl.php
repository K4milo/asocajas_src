<?php

/*
  Template Name: Landing Template
*/
get_template_part('includes/landing/header');

get_template_part('includes/landing/video');

get_template_part('includes/loops/loop','videos-creamos');

get_template_part('includes/landing/galeria');

get_template_part('includes/landing/contenido-destacado');

?>
<div class="prefooter">
	<?php
	get_template_part('includes/landing/cifras');
	get_template_part('includes/landing/porcentajes');
	?>
</div>

<?php
get_template_part('includes/landing/footer');
