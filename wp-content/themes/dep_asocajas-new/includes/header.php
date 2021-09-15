<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-left',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        <?php get_template_part('includes/navbar-search'); ?>
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-right',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>

       
        <div class="text-2 widget_text"><h4>Información de contacto</h4>			
          <div class="textwidget">
            <h5>Asocajas</h5>
            <p>Tel. <a href="tel:+57 1 323 27 65">+57 1 323 27 65</a> – <a href="tel:+57 1 340 59 24"> Fax 340 59 24</a><br>
            Calle 94 No. 11 – 30 Piso 6<br>
            Edificio RGC Chicó – Bogotá – Colombia</p>
            <div class="link_header_mobile">
              <a href="https://www.asocajas.org.co/wp-content/uploads/2019/11/POL%C3%8DTICA-PARA-EL-TRATAMIENTO-DE-LA-INFORMACI%C3%93N-EN-ASOCAJAS.pdf">Tratamiento de Datos Personales</a>
              <a href="http://pruebaasocajas.asocajas.org.co/">Registro y Actualización de Datos</a>
            </div>
          </div>     
        </div>
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
  
<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar, 
then you probably don't require a site title. Alternatively you can use the example below. 
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->
