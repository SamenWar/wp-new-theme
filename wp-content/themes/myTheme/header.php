
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/imgassets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
      <?php the_field('analytics', 'option')?>
     
        <?php wp_head() ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="<?php echo site_url() ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i> 
                </button>
 
                 <?php 
                wp_nav_menu(array(

                    'theme_location'=>'head_menu',
                    'depth'=> 1,
                    'container_id'=>'navbarResponsive',
                    'container_class'=>'collapse navbar-collapse',
                    'menu_class'=>'navbar-nav text-uppercase ms-auto py-4 py-lg-0',
                    

                    )
                );  
                ?>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"><?php bloginfo('description') ?></div>
                <div class="masthead-heading text-uppercase"><?php bloginfo('name') ?></div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
            
        </header>