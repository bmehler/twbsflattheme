<div class="well">
    <aside>
        <?php if( is_page() ) { ?>
        <!--<h3>Aktuelles</h3>
        <p>18.5.2017<br/>Campustreffen der Webmaster!</p>-->
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

