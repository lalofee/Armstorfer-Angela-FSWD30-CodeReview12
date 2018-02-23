<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
    
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
   <?php wp_head(); ?>
    <!-- <link href="css/blog.css" rel="stylesheet"> -->
  </head> 

  
  <body <?php body_class(); ?>>

    <div class="blog-masthead">
      <div class="container">
        
        <?php wp_nav_menu( array( 
            'theme_location' => 'header-menu', 
            'menu_class' => 'blog-nav list-inline' 
) ); ?>
      
      </div>
    </div>

 <div class="container">


  <div class="jumbotron text-center">
          <h1>The Travel Agency</h1> 
          <p>We provide the best tips for travelers around the world!</p> 
        </div>



      <div class="row">
