<article <?php post_class(); ?>>
    <h3><a href="<?php the_permalink();?> "> <?php the_title(); ?></h3>
    <p>Veröffentlicht von: <?php the_author();?> am <?php the_time('d.m.Y') ?>.</p>
    <?php the_content(); ?>
</article>

