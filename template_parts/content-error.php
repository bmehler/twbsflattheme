<?php if(is_search()) {?>
    <section <?php post_class() ?>>
        Die Suche ergab keine Ergebnisse
    </section>
<?php } else { ?>
 <section <?php post_class() ?>>
     <h2>Fehler 404</h2>
     <p>Diese Seite existiert nicht.</p>
    </section>
<?php }