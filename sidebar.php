<?php if( is_page() ) { ?>
<div class="well">
    <aside>
    <?php get_search_form(); ?>
    </aside>
</div>
 <?php } ?>

<div class="well">
    <aside>
        <?php if( is_page() ) { ?>
   
        <?php dynamic_sidebar( 'sidebar-news-widget-area' ); ?>
       
        <?php } else { ?>
        <h2>Kategorien</h2>
        <ul>
           <?php wp_list_categories('orderby=name&order=ASC&title_li='); ?>
        </ul>
        <h2>Archiv</h2>
        <ul>
           <?php wp_get_archives('type=monthly'); ?>
        </ul>
        <?php } ?>
    </aside>
</div>

<?php if( is_page() ) { ?>
<div class="well">
    <aside>
    <?php dynamic_sidebar( 'sidebar-post-widget-area' ); ?>
    </aside>
</div>
 <?php }