<!DOCTYPE html>
<html <?php language_attributes();?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <title>
    <?php bloginfo('name'); ?>
    <?php is_front_page() ? bloginfo ('description') : wp_title(); ?>  
    </title>

     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
     
   <?php wp_head();?>
  </head>

  <body>

  <div class="brand" >Spa & Massage</div>
    <div class="blog-masthead">
      <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            <?php
              wp_nav_menu( array(
                'theme_location'  => 'primary',
                'container'     => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'      => 'navbarCollapse',
                'menu_class'    => 'nav navbar-nav',
                'fallback_cb'   => '__return_false',
                'items_wrap'    => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'       => 2,
                'walker'      => new bootstrap_4_walker_nav_menu()
              ) );
            ?>
              <?php get_search_form(); ?>
        </div>
      </nav>
    </div>

   <!-- <div class="container">
      <div class="blog-header">
        <h1 class="blog-title">Välkommen</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p> 
      </div>
    </div>-->


