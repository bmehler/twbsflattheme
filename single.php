<?php get_header();?>
<main>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <?php get_template_part('template_parts/content'); ?>
    
    <?php endwhile; else : ?>
    
        <?php get_template_part('template_parts/content', 'error'); ?>
    
    <?php endif; ?>
        
   <?php get_sidebar(); ?> 
</main>
<?php get_footer(); ?>