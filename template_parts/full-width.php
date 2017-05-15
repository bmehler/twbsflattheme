<?php
 /*
 Template Name: Full Width
 */
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        
    <?php wp_head(); ?>    
    </head>
    <body <?php body_class(); ?>>
       <?php get_template_part('template_parts/navi'); ?>
       <div class="jumbotron">
            <div class="container">
                <h1>
                    <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
                </h1>
                <button href="#" class="btn btn-primary btn-md">Wordpress</button> 
                <button href="#" class="btn btn-success btn-md">Bootstrap Flatly</button> 
                <button href="#" class="btn btn-warning btn-md">Reponsive Webdesign</button>
                <h3>
                    <?php bloginfo( 'description' ); ?>
                </h3>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php if ( is_front_page()) { ?>

                     <?php get_template_part('template_parts/content', 'front-page'); ?>

                    <?php } else {  ?>

                    <?php get_template_part('template_parts/content', 'page'); ?>

                    <?php } ?>

                    <?php endwhile; else : ?>

                    <?php get_template_part('template_parts/content', 'error'); ?>

                    <?php endif; ?>
                </div>
            <div class="col-lg-4 col-md-6">
            <?php get_sidebar(); ?>
            </div>
        </div>
<?php get_footer(); ?>


