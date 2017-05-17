<?php get_header();?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            
            <h4>Suchergebnisse für Ihre Suche nach: <strong><?php echo $s; ?><strong></h4>
            <?php
            
            global $wp_query;
            $count = $wp_query->post_count;
            $term = $wp_query->query_vars; // this result array of available fields.
            
            $number = ( $count > 1 ) ? 'wurden' : 'wurde';

            echo '<p>Es ' . $number .' '. $count . ' Treffer gefunden</p>'; ?> 
                        
            <br/>
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
            <?php get_template_part('template_parts/content'); ?>
    
            <?php endwhile; else : ?>
    
            <?php get_template_part('template_parts/content', 'error'); ?>
    
            <?php endif; ?>
        </div>
         <div class="col-lg-4 ">
    <?php get_sidebar(); ?>
    </div>
    </div>
<?php get_footer(); ?>
        