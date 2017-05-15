<div class="panel panel-primary">
    <div class="panel-heading">
        <article <?php post_class(); ?>>
        <h3 class="panel-title">
            <strong><a href="<?php the_permalink();?> "> <?php the_title(); ?></a></strong>
            <span class="pull-right">Autor: <strong><?php the_author();?>
                </strong> vom: <strong><?php the_time('d.m.Y') ?></strong>
                | <?php foreach((get_the_category()) as $category) { echo 'Kategorie: ' . $category->cat_name . ' '; } ?>
            </span>
        </h3>
        </article>
    </div>
    <div class="panel-body">
        <?php the_content() ?>
    </div>
</div>