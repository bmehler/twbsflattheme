<?php get_header();?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
            <?php get_template_part('template_parts/content','single'); ?>
    
            <?php endwhile; else : ?>
    
            <?php get_template_part('template_parts/content', 'error'); ?>
    
            <?php endif; ?>
            <a href="<?php echo get_site_url(); ?>" class="btn btn-warning btn-md pull-right">Zurück</a>
        </div>
    </div>
<?php get_footer(); ?>