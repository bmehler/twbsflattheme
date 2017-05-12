<!DOCTYPE html>
<html>
    <head>
        <title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        
    <?php wp_head(); ?>    
    </head>
    <body <?php body_class(); ?>>
        <header>
            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></h1>
            <h3><?php bloginfo( 'description' ); ?></h3>
            
             <?php get_template_part('template_parts/navi'); ?>
        </header>
       
