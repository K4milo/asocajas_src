<?php

/*
  Template Name: Home Template
*/

	get_template_part('includes/header');

	get_template_part('includes/home/slider');
	  get_template_part('includes/loops/loop','home-posts');
	  get_template_part('includes/home/revista');
		get_template_part('includes/home/cifras');

	get_template_part('includes/footer');
