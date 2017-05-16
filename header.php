<!DOCTYPE html>
<html>
    <head>
        <title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        
    <?php wp_head(); ?>    
    </head>
    <body <?php body_class(); ?>>
       <?php get_template_part('template_parts/navi'); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <header>
                    <br/><br />
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1>
                                <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
                            </h1>
                                <button href="#" class="btn btn-primary btn-xs"><i class="fa fa-wordpress" aria-hidden="true"></i> Wordpress</a> 
                                <button href="#" class="btn btn-success btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Bootstrap Flatly</a> 
                                <button href="#" class="btn btn-warning btn-xs"><i class="fa fa-desktop" aria-hidden="true"></i> Reponsive Webdesign</a>
                            </div>
                            <div class="panel-body">
                            <h3>
                              <?php bloginfo( 'description' ); ?>
                            </h3>
                        </div>
                    </div>
                    </header>
                </div>
            </div>
        </div>
       
        
       
