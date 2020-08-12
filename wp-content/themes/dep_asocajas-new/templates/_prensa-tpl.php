<?php

/*
  Template Name: Sala de Prensa Template
*/

	get_template_part('includes/header');

	get_template_part('includes/noticias/banner');

	/*Noticias*/
	get_template_part('includes/loops/loop','posts');

	get_template_part('includes/home/revista');


	get_template_part('includes/footer');
