<?php get_header();?>
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